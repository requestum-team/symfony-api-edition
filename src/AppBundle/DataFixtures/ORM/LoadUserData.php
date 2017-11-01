<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadPropertyManagerData
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

        $user = new User();
        $user->setEmail('kirill@gmail.com');
        $user->setName('Kirill');
        $user->setEnabled(true);
        $user->setPlainPassword(123);
        $this->addReference('user-kirill', $user);

        $manager->persist($user);

        $manager->flush();
    }
}
