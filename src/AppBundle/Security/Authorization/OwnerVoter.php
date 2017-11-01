<?php

namespace AppBundle\Security\Authorization;

use Requestum\ApiBundle\Security\Authorization\AbstractEntityVoter;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class OwnerVoter
 */
class OwnerVoter extends AbstractEntityVoter
{
    /**
     * @var string
     */
    protected $userPath;

    /**
     * @var PropertyAccess
     */
    protected $propertyAccess;

    /**
     * OwnerVoter constructor.
     *
     * @param string $attributes
     * @param string $entityClass
     * @param bool $userRequired
     * @param string $userPath
     */
    public function __construct($attributes, $entityClass, $userPath = 'user')
    {
        parent::__construct($attributes, $entityClass, true);

        $this->userPath = $userPath;
        $this->propertyAccess = PropertyAccess::createPropertyAccessor();
    }


    /**
     * {@inheritdoc}
     */
    protected function voteOnEntity($attribute, $entity, UserInterface $user = null)
    {
        $owner = $this->userPath ? $this->propertyAccess->getValue($entity, $this->userPath) : $entity;

        return $owner && $owner->getId() === $user->getId();
    }
}