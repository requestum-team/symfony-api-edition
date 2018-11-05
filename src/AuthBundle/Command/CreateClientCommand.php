<?php

namespace AuthBundle\Command;

use AuthBundle\Util\ClientCredentialsGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * CreateClientCommand.
 */
class CreateClientCommand extends ContainerAwareCommand
{
    use ClientCredentialsGenerator;

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->setName('auth:client:create')
             ->setDescription('Creates a new auth client')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Creating a New OAuth Client.');

        $container = $this->getContainer();
        $clientManager = $container->get('fos_oauth_server.client_manager.default');

        /** @var \AuthBundle\Entity\Client $client */
        $client = $clientManager->createClient();

        $client->setName($io->ask('name'));
        $client->setRandomId($io->ask('Client ID (left blank to generate)', $this->generateClientId()));
        $client->setSecret($io->ask('Client secret (left blank to generate)', $this->generateClientSecret()));

        $gtStr = $io->ask('Allowed grant types (comma separated array)', 'client_credentials,token,refresh_token,password');
        $client->setAllowedGrantTypes(array_map('trim', explode(',', $gtStr)));

        $clientManager->updateClient($client);

        $io->section('Oauth client info:');
        $io->listing([
            sprintf('Public ID: <info>%s</info>', $client->getPublicId()),
            sprintf('Secret: <info>%s</info>', $client->getSecret()),
        ]);
        $io->success('New Oauth client created.');
    }
}
