<?php

namespace Tests\AppBundle\Action;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Client;

abstract class AbstractActionTest extends KernelTestCase
{
    use RestCrudTestCaseTrait;
    use ORMTestCaseTrait;

    /** @var ContainerInterface */
    private $container;

    /** @var  Client */
    protected $client;

    protected function setUp()
    {
        parent::setUp();

        static::bootKernel();

        $this->container = static::$kernel->getContainer();

        $this->client = $this->container->get('test.client');
        $this->client->disableReboot();

        $this->callTraitHookMethod('setup');
    }

    protected function tearDown()
    {
        $this->callTraitHookMethod('tearDown');

        parent::tearDown();
    }

    protected function getContainer()
    {
        return $this->container;
    }

    protected function getClient()
    {
        return $this->client;
    }

    private function callTraitHookMethod(string $hook)
    {
        $rc = new \ReflectionClass(self::class);
        foreach($rc->getTraitNames() as $trait) {
            $traitStruct = explode('\\', $trait);
            $trait = end($traitStruct);
            $method = "{$hook}{$trait}";
            if (method_exists($this, $method)) {
                $this->$method();
            }
        }
    }
}
