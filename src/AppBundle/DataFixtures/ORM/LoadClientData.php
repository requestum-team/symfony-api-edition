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
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $client = new Client();
        $client->setRandomId('20aa5tpwg04ks4w84o8cookswwccgkwko40gwcs0ws840wkssk');
        $client->setSecret('79fqd7qzbp8g8o8oggss48w4kwck4s4kccwwk8804ksowg8o');
        $client->setAllowedGrantTypes(['client_credentials', 'token', 'refresh_token', 'password']);
        $client->setRedirectUris([]);
        $this->addReference('auth-client', $client);
        $manager->persist($client);

        $manager->flush();
    }
}
