<?php

namespace AppBundle\DataFixtures\ORM;

use AuthBundle\Entity\Client;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * LoadClientData.
 */
class LoadClientData extends AbstractFixture
{
    const CLIENT_ID = "Change this to unique client id!";
    const CLIENT_SECRET = "Change this to unique client secret!";

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $client = new Client();
        $client->setRandomId(static::CLIENT_ID);
        $client->setSecret(static::CLIENT_SECRET);
        $client->setAllowedGrantTypes(['client_credentials', 'token', 'refresh_token', 'password']);
        $client->setRedirectUris([]);
        $this->addReference('auth-client', $client);
        $manager->persist($client);

        $manager->flush();
    }
}
