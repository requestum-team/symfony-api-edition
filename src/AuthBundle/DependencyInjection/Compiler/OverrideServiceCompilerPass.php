<?php

namespace AuthBundle\DependencyInjection\Compiler;

use AuthBundle\Entity\ClientManager;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class OverrideServiceCompilerPass.
 */
class OverrideServiceCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('fos_oauth_server.client_manager.default');
        $definition
            ->setClass(ClientManager::class)
        ;
    }
}
