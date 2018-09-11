<?php

namespace AppBundle\Action\User\FilterExtension;

use Requestum\ApiBundle\Action\Extension\FiltersExtensionInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use AppBundle\Entity\User;

/**
 * Class AccessFilterExtension
 */
class AccessFilterExtension implements FiltersExtensionInterface
{
    /**
     * @var TokenStorage
     */
    protected $tokenStorage;

    /**
     * AccessFilterExtension constructor.
     * @param TokenStorage $tokenStorage
     */
    public function __construct(TokenStorage $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function extend(&$filters, $entityClass, $options = [])
    {
        /** @var User $user */
        if (!is_object($user = $this->tokenStorage->getToken()->getUser())) {
            throw new AccessDeniedHttpException();
        }

        $filters['accessible-for'] = $user;
    }
}
