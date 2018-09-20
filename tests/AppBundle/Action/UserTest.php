<?php

namespace Tests\AppBundle\Action\User;

use AppBundle\DataFixtures\ORM\LoadClientData;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Tests\AppBundle\Action\AbstractActionTest;
use AppBundle\DataFixtures\Test;
use Tests\AppBundle\Action\ArrayPathTrait;
use Tests\AppBundle\Action\ParamWrapper;

class UserTest extends AbstractActionTest
{
    use ArrayPathTrait;

    protected $url = '/api/users';

    protected function getEntityName()
    {
        return User::class;
    }

    /**
     * @param $data
     * @param $code
     * @param $contains
     * @dataProvider accessTokenProvider
     */
    public function testAccessToken($data, $code, $contains = [])
    {
        $this->loadFixtures([
            Test\LoadUserData::class,
            Test\LoadAnonymousTokenData::class,
        ]);

        $result = $this->createItem($data, '/oauth/v2/token', $code, $contains);
    }

    public function accessTokenProvider()
    {
        return [
            [
                [
                    'client_id' => LoadClientData::CLIENT_ID,
                    'client_secret' => LoadClientData::CLIENT_SECRET,
                    'grant_type' => 'client_credentials'
                ],
                200
            ],
            [
                [
                    'client_id' => 'wrong',
                    'client_secret' => 'wrong',
                    'grant_type' => 'client_credentials'
                ],
                400
            ],
            [
                [
                    'client_id' => LoadClientData::CLIENT_ID,
                    'client_secret' => LoadClientData::CLIENT_SECRET,
                    'grant_type' => 'password',
                    'username' => 'user1@gmail.com',
                    'password' => '123'
                ],
                200
            ],
            [
                [
                    'client_id' => LoadClientData::CLIENT_ID,
                    'client_secret' => LoadClientData::CLIENT_SECRET,
                    'grant_type' => 'password',
                    'username' => 'user1@gmail.com',
                    'password' => 'wrong'
                ],
                400
            ],
        ];
    }

    /** @dataProvider listProvider */
    public function testList($token, $filters, $status, $count = 0, $contains = [])
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
            Test\LoadUserAccessTokenData::class,
        ]);

        $result = $this
            ->setToken($token)
            ->getList(null, $filters, $status, null, $contains)
        ;

        if ($status == 200) {
            $this->assertCount($count, $this->getPath($result, '[entities]'));
        }
    }

    public function listProvider()
    {
        return [

            ['Bearer AccessToken_For_Client', [], 403],
            ['Bearer AccessToken_For_User2', [], 200, 2],
            ['Bearer AccessToken_For_User2', [], 200, 2],
        ];
    }

    /**
     * @dataProvider fetchDataProvider
     */
    public function testFetch($id, $token, $status)
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
            Test\LoadUserAccessTokenData::class,
        ]);

        $this
            ->setToken($token)
            ->getItem($id, $status)
        ;
    }

    /**
     * @return array
     */
    public function fetchDataProvider()
    {
        return [
            [new ParamWrapper(User::class, ['email' => 'user1@gmail.com']), 'Bearer AccessToken_For_Client', 403],
            [new ParamWrapper(User::class, ['email' => 'user1@gmail.com']), 'Bearer AccessToken_For_User1', 200],
            [new ParamWrapper(User::class, ['email' => 'user1@gmail.com']), 'Bearer AccessToken_For_User2', 200],
        ];
    }

    /** @dataProvider createDataProvider */
    public function testCreate($token, $data, $status, $contains = [])
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
        ]);

        $this
            ->setToken($token)
            ->createItem($data, null, $status, $contains)
        ;

        if ($status == 201) {
            /** @var User $createdUser */
            $createdUser = $this->getObjectOf(User::class, ['email' => $data['email']]);

            $this->assertNotNull($createdUser);
            $this->assertPassword($createdUser, $data['plainPassword']);
        }
    }

    public function createDataProvider()
    {
        return [
            [
                'Bearer AccessToken_For_Client',
                [
                    'name' => 'test',
                    'email' => 'test@toto.com',
                    'plainPassword' => '321',
                ],
                201,
            ],
            [
                'Bearer AccessToken_For_Client',
                [
                    'name' => 'test',
                    'plainPassword' => '321',
                ],
                422,
                [
                    'email', 'is_blank_error'
                ]
            ],
        ];
    }

    /** @dataProvider updateDataProvider */
    public function testUpdate($token, $data, $status, $contains = [])
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
            Test\LoadUserAccessTokenData::class,
        ]);

        $user = $this->getObjectOf(User::class);

        $this
            ->setToken($token)
            ->updateItem($data, $user->getId(), null, $status, $contains)
        ;
    }

    public function updateDataProvider()
    {
        return [
            [
                'Bearer AccessToken_For_User1',
                ['email' => 'valid@email.com'],
                200,
            ],
            [
                'Bearer AccessToken_For_User1',
                ['email' => 'invalid'],
                422,
                ['email']
            ],
            [
                'Bearer AccessToken_For_User2',
                ['name' => 'test'],
                403,
            ],
            [
                'Bearer AccessToken_For_Client',
                ['name' => 'test'],
                403,
            ],
        ];
    }

    public function testForgotPassword()
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
            Test\LoadUserData::class
        ]);

        /** @var User $user */
        $user = $this->getObjectOf(User::class, ['email' => 'user1@gmail.com']);

        $client = $this->getClient();
        $client->enableProfiler();

        $client->request(
            Request::METHOD_POST,
            $this->url.'/'.$user->getEmail().'/update-token',
            [
                'transport' => 'web:password-reset'
            ],
            [],
            $this->headers
        );
        $this->assertEquals(204, $this->getClient()->getResponse()->getStatusCode());

        $this->assertNotNull($user->getConfirmationToken());
        $this->assertStringStartsWith('t_', $user->getConfirmationToken());

        /** @var MessageDataCollector $emailCollector */
        $emailCollector = $client->getProfile()->getCollector('swiftmailer');
        $this->assertSame(1, $emailCollector->getMessageCount());
        /** @var \Swift_Message $message */
        $message = $emailCollector->getMessages()[0];
        $this->assertArrayHasKey($user->getEmail(), $message->getTo());

        $this->assertContains('password reset', $message->getBody());
        $this->assertContains($user->getConfirmationToken(), $message->getBody());
    }

    public function testResetPassword()
    {
        $this->loadFixtures([
            Test\LoadAnonymousTokenData::class,
            Test\LoadUserData::class
        ]);

        /** @var User $user */
        $user = $this->getObjectOf(User::class, ['email' => 'user2@gmail.com']);
        $user->setConfirmationToken($confirmationToken = 't_1234567890');

        $this->getClient()->getContainer()->get('doctrine.orm.default_entity_manager')->flush();

        $data = [
            'plainPassword' => '321'
        ];

        $this->getClient()->request(
            Request::METHOD_PATCH,
            $this->url.'/'.$confirmationToken,
            $data,
            [],
            $this->headers
        );
        $this->assertEquals(200, $this->getClient()->getResponse()->getStatusCode());

        $this->assertPassword($user, '321');
    }

    private function assertPassword(User $user, $password)
    {
        $this->assertTrue(
            $this->getContainer()->get('security.password_encoder')->isPasswordValid($user, $password),
            'password valid'
        );
    }
}
