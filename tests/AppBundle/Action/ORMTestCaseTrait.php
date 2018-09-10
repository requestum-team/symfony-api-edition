<?php

namespace Tests\AppBundle\Action;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Client;

trait ORMTestCaseTrait
{
    /** @var  EntityManager */
    private $em;

    public function setupORMTestCaseTrait()
    {
        $this->em = $this->container->get('doctrine.orm.entity_manager');
        $this->em->getConnection()->beginTransaction();
    }

    protected function tearDownORMTestCaseTrait()
    {
        $this->em->getConnection()->rollBack();
    }

    protected function loadFixtures(array $classNames, $omName = null, $registryName = 'doctrine', $purgeMode = null)
    {
        $loader = new ContainerAwareLoader($this->container);

        foreach ($classNames as $className) {
            $loader->addFixture(new $className);
        }

        $executor = new ORMExecutor($this->em);
        $executor->execute($loader->getFixtures(), true);
    }
}
