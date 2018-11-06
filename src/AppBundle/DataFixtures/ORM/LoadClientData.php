<?php

namespace AppBundle\DataFixtures\ORM;

use AuthBundle\Entity\Client;
use AuthBundle\Util\ClientCredentialsGenerator;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * LoadClientData.
 */
class LoadClientData extends AbstractFixture implements ContainerAwareInterface
{
    use ContainerAwareTrait;
    use ClientCredentialsGenerator;

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $client = new Client();
        $client->setRandomId($this->getParameter('default_client_id') ?: $this->generateClientId());
        $client->setSecret($this->getParameter('default_client_secret') ?: $this->generateClientSecret());
        $client->setAllowedGrantTypes(['client_credentials', 'token', 'refresh_token', 'password']);
        $client->setRedirectUris([]);
        $client->setName('default');
        $this->addReference('auth-client', $client);
        $manager->persist($client);

        $manager->flush();
    }

    /**
     * @param $name
     * @return mixed
     */
    private function getParameter($name)
    {
        if (($value = $this->container->getParameter($name)) == 'ChangeIt') {
            throw new \InvalidArgumentException('Please generate and change "'.$name.'" in parameters.yml. Or set it null to automatically generate random one (note that in this case it will be regenerated any time you reload fixtures).');
        }

        return $value;
    }
}
