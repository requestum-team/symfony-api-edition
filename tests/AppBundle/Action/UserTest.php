<?php

namespace Tests\AppBundle\Action\User;

use AppBundle\DataFixtures\Demo\LoadUserData;
use AppBundle\DataFixtures\Test\LoadAnonymousTokenData;
use AppBundle\Entity\User;
use Requestum\ApiBundle\Tests\RestCrudTestCase;
use Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector;
use Symfony\Component\HttpFoundation\Request;

class UserTest extends RestCrudTestCase
{
    protected $url = '/api/users';
    protected $headers = [
        'Accept' => 'application/json',
        'HTTP_Authorization' => 'Bearer AccessToken_For_Client',
    ];

    protected function getEntityName()
    {
        return User::class;
    }

}