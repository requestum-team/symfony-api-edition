<?php

namespace AppBundle\Service\ResetPassword;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Requestum\EmailSenderBundle\Email\TemplateType;
use Requestum\EmailSenderBundle\Service\EmailSender;

final class ResetPassword
{

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EmailSender
     */
    protected $emailSender;

    /**
     * @var string
     */
    protected $defaultEmailFrom;

    /**
     * @var string
     */
    protected $resetLinkTemplate;

    /**
     * ResetPassword constructor.
     *
     * @param EntityManagerInterface $em
     * @param EmailSender $emailSender
     * @param string $defaultEmailFrom
     * @param string $resetLinkTmpl
     */
    public function __construct(EntityManagerInterface $em, EmailSender $emailSender, $defaultEmailFrom, $resetLinkTmpl)
    {
        $this->em = $em;
        $this->emailSender = $emailSender;
        $this->defaultEmailFrom = $defaultEmailFrom;
        $this->resetLinkTemplate = $resetLinkTmpl;
    }

    /**
     * @param User $user
     */
    public function sendEmail(User $user)
    {
        $token = $this->generateToken();

        $user->setConfirmationToken($token);

        $this->em->flush();

        $this->emailSender->sendType(new TemplateType(
            $this->defaultEmailFrom,
            $user->getEmail(),
            'Retrieve your password on Evo',
            'AppBundle:Emails:reset_password.html.twig',
            ['resetPasswordLink' => str_replace('{token}', $token, $this->resetLinkTemplate)]
        ));
    }

    /**
     * @return string
     */
    private function generateToken()
    {
        return rtrim(strtr(hash('sha256', rand()), '+/', '-_'), '=');
    }

}