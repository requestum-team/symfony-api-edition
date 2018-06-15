<?php

namespace AppBundle\DataFixtures\Test;

use AppBundle\DataFixtures\ORM\LoadClientData;
use AuthBundle\Entity\AccessToken;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAnonymousTokenData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            LoadClientData::class
        ];
    }

    public function load(ObjectManager $manager)
    {
        $accessToken = new AccessToken();
        $accessToken->setClient($this->getReference('auth-client'));
        $accessToken->setToken('AccessToken_For_Client');
        $accessToken->setExpiresAt((new \DateTime('+1 year'))->getTimestamp());

        $manager->persist($accessToken);
        $manager->flush();
    }
}
