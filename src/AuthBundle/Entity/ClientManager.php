<?php

namespace AuthBundle\Entity;

use Doctrine\Common\Persistence\ObjectManager;
use FOS\OAuthServerBundle\Entity\ClientManager as BaseClientManager;

/**
 * Class ClientManager.
 */
class ClientManager extends BaseClientManager
{
    /**
     * {@inheritdoc}
     */
    public function findClientByPublicId($publicId)
    {
        return $this->findClientBy(['randomId' => $publicId]);
    }
}
