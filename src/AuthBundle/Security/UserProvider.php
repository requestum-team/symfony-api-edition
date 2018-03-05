<?php

namespace AuthBundle\Security;


use Doctrine\ORM\EntityManager;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Class UserProvider
 */
class UserProvider implements UserProviderInterface
{

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * UserProvider constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($email)
    {
        $repository = $this->em->getRepository(User::class);

        $user = $repository->findOneBy(['email' => $email]);

        if (!$user) {
            throw new UsernameNotFoundException(sprintf('Email "%s" does not exist.', $email));
        }

        return $user;
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {

        return $this->loadUserByUsername($user->getEmail());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return User::class === $class;
    }
}