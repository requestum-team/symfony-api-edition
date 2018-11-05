<?php

namespace AuthBundle\Command;

use AppBundle\Entity\Event;
use AuthBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ListClientsCommand
 */
class ListClientsCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('auth:client:list')
            ->setDescription('List clients')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $clients = $em->getRepository(Client::class)->findAll();

        $table = new Table($output);
        $table->setHeaders(['Name', 'Client ID', 'Client secret', 'Grant types']);

        /** @var Client $client */
        foreach ($clients as $client) {
            $table->addRow([$client->getName(), $client->getPublicId(), $client->getSecret(), implode(',', $client->getAllowedGrantTypes())]);
        }

        $table->render();
    }
}
