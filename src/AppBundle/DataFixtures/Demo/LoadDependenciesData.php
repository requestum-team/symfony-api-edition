<?php

namespace AppBundle\DataFixtures\Demo;

use AppBundle\DataFixtures\ORM\LoadClientData;
use AppBundle\DataFixtures\ORM\LoadSiteData;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadDependenciesData Used to define ORM fixtures as dependencies. Add all production fixtures here.
 */
class LoadDependenciesData extends AbstractFixture implements DependentFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDependencies()
    {
        return [
            LoadClientData::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        // nothing to do, this class is used only to define dependencies from main fixtures set
    }
}
