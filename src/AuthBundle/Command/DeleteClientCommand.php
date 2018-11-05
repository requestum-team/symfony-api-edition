<?php

namespace AuthBundle\Command;

use AppBundle\Entity\Event;
use AuthBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class DeleteClientCommand
 */

class DeleteClientCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('auth:client:delete')
            ->setDescription( 'Delete client')
            ->addArgument( 'name', InputArgument::REQUIRED, 'Enter the name of the client you want to delete')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $event = $em->getRepository(Client::class)->findOneBy([ 'name' => $name ]);

        $em->remove($event);
        $em->flush();
    }
}
