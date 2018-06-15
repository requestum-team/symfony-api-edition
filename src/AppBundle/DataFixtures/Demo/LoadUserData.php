<?php

namespace AppBundle\DataFixtures\Demo;

use AppBundle\DataFixtures\ORM\LoadSiteData;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadUserData
 */
class LoadUserData extends AbstractFixture
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('artur@gmail.com');
        $user->setName('Artur');
        $user->setEnabled(true);
        $user->setPlainPassword(123);
        $this->addReference('user-artur', $user);

        $manager->persist($user);

        $user1 = new User();
        $user1->setEmail('kirill@gmail.com');
        $user1->setName('Kirill');
        $user1->setEnabled(true);
        $user1->setPlainPassword(123);
        $this->addReference('user-kirill', $user1);

        $manager->persist($user1);

        $manager->flush();
    }
}
