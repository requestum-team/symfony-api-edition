<?php

namespace AppBundle\DataFixtures\Demo;

use AppBundle\DataFixtures\ORM\LoadClientData;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AuthBundle\Entity\AccessToken;

/**
 * LoadAccessTokenData.
 */
class LoadAccessTokenData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            LoadClientData::class,
            LoadUserData::class
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $accessToken = new AccessToken();
        $accessToken->setClient($this->getReference('auth-client'));
        $accessToken->setToken('AccessToken_For_Artur');
        $accessToken->setUser($this->getReference('user-artur'));
        $accessToken->setExpiresAt((new \DateTime('+1 year'))->getTimestamp());
        $manager->persist($accessToken);

        $accessToken = new AccessToken();
        $accessToken->setClient($this->getReference('auth-client'));
        $accessToken->setToken('AccessToken_For_Kirill');
        $accessToken->setUser($this->getReference('user-kirill'));
        $accessToken->setExpiresAt((new \DateTime('+1 year'))->getTimestamp());
        $manager->persist($accessToken);

        $manager->flush();
    }
}
