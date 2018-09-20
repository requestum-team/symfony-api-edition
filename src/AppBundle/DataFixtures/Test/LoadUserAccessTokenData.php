<?php

namespace AppBundle\DataFixtures\Test;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AuthBundle\Entity\AccessToken;

/**
 * LoadAccessTokenData.
 */
class LoadUserAccessTokenData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getDependencies()
    {
        return [
            LoadUserData::class
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $accessToken = new AccessToken();
        $accessToken->setToken('AccessToken_For_User1');
        $accessToken->setUser($this->getReference('user1'));
        $accessToken->setExpiresAt((new \DateTime('+1 year'))->getTimestamp());
        $manager->persist($accessToken);

        $accessToken = new AccessToken();
        $accessToken->setToken('AccessToken_For_User2');
        $accessToken->setUser($this->getReference('user2'));
        $accessToken->setExpiresAt((new \DateTime('+1 year'))->getTimestamp());
        $manager->persist($accessToken);

        $manager->flush();
    }
}
