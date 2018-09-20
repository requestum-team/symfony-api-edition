<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Requestum\ApiBundle\Rest\Metadata\Reference;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\EntityListeners({"AppBundle\EventListener\UserListener"})
 * @UniqueEntity("email")
 */
class User implements UserInterface
{

    use TimestampableEntity;

    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @Groups("default")
     */
    private $id;

    /**
     * @var string User name
     *
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank
     *
     * @Groups("default")
     */
    private $name = '';

    /**
     * @var string User email
     *
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank
     * @Assert\Email()
     *
     * @Groups("default")
     */
    private $email;

    /**
     * @var string Encrypted password.
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @var string Encrypted password.
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank
     */
    protected $plainPassword;

    /**
     * @var string User level
     *
     * @ORM\Column(type="boolean")
     *
     * @Groups("default")
     */
    private $enabled;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     *
     */
    protected $confirmationToken;

    public function __construct()
    {
        $this->enabled = true;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @return array
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
        $this->password = null;

        return $this;
    }

    /**
     *
     */
    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    /**
     * @return bool|string
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $boolean
     * @return $this
     */
    public function setEnabled($boolean)
    {
        $this->enabled = $boolean;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @param string $confirmationToken
     * @return $this
     */
    public function setConfirmationToken($confirmationToken = null)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }
}
