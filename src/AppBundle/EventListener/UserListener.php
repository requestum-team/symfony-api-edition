<?php

namespace AppBundle\EventListener;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Doctrine\ORM\Event\PreUpdateEventArgs;

/**
 * Class UserListener
 */
class UserListener
{
    /**
     * @var UserPasswordEncoder
     */
    private $passwordEncoder;

    /**
     * UserEntityListener constructor.
     * @param UserPasswordEncoder $passwordEncoder
     */
    public function __construct(UserPasswordEncoder $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    /**
     * @param User $user
     */
    public function prePersist(User $user)
    {
        $this->encodePassword($user);
    }

    /**
     * @param User $user
     * @param PreUpdateEventArgs $args
     */
    public function preUpdate(User $user, PreUpdateEventArgs $args)
    {
        if ($args->hasChangedField('password')) {
            $this->encodePassword($user);
        }
    }


    /**
     * @param User $user
     */
    private function encodePassword(User $user)
    {
        if ($user->getPlainPassword()) {
            $encodedPassword = $this->passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user
                ->setPassword($encodedPassword)
                ->setConfirmationToken(null)
                ->eraseCredentials()
            ;
        }
    }
}
