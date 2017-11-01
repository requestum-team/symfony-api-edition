<?php

namespace AuthBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * CreateOAuthClientCommand.
 */
class CreateOAuthClientCommand extends ContainerAwareCommand
{

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->setName('auth:oauth-server:create-client')
             ->setDescription('Creates a new OAuth client')
             ->setHelp(<<<'HELP'
The <info>%command.name%</info> command creates a new OAuth client.

<info>%command.full_name% [--redirect-uri=...] [--grant-type=...]</info>
HELP
             )
             ->addOption(
                 'redirect-uri',
                 null,
                 InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                 'Sets redirect uri for client. Use this option multiple times to set multiple redirect URIs.',
                 null
             )
             ->addOption(
                 'grant-type',
                 null,
                 InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                 'Sets allowed grant type for client. Use this option multiple times to set multiple grant types..',
                 null
             );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Creating a New OAuth Client.');

        if (empty($this->grantTypes)) {
            $this->grantTypes = ['client_credentials', 'token', 'refresh_token', 'password'];
        }

        $container = $this->getContainer();

        $clientManager = $container->get('fos_oauth_server.client_manager.default');

        /** @var \AuthBundle\Entity\Client $client */
        $client = $clientManager->createClient();
        $client->setRedirectUris($input->getOption('redirect-uri'));
        $client->setAllowedGrantTypes($this->grantTypes);

        $validator = $container->get('validator');
        $errors = $validator->validate($client);
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $io->error($error->getMessage());
            }

            return;
        }

        $clientManager->updateClient($client);

        $io->section('Oauth client info:');
        $io->listing([
            sprintf('Public ID: <info>%s</info>', $client->getPublicId()),
            sprintf('Secret: <info>%s</info>', $client->getSecret()),
        ]);
        $io->success('New Oauth client created.');
    }
}
