<?php

namespace AppBundle\Service\UpdateTokenSender;

use AppBundle\Entity\User;
use AppBundle\Service\UpdateTokenSender\Exception\UnknownTransportException;
use Requestum\EmailSenderBundle\Email\TemplateType;
use Requestum\EmailSenderBundle\Service\EmailSender;

/**
 * Class UpdateTokenSender
 */
class UpdateTokenSender
{
    /**
     * @var EmailSender
     */
    private $emailSender;

    /**
     * @var string
     */
    private $defaultEmailFrom;

    private $linkTemplates;

    /**
     * UpdateTokenSender constructor.
     * @param EmailSender $emailSender
     * @param string $defaultEmailFrom
     */
    public function __construct(EmailSender $emailSender, $defaultEmailFrom, $linkTemplates)
    {
        $this->emailSender = $emailSender;
        $this->defaultEmailFrom = $defaultEmailFrom;
        $this->linkTemplates = $linkTemplates;
    }

    /**
     * @param string $transport
     * @param User $user
     */
    public function send($transport, User $user)
    {
        switch ($transport) {
            case 'web:password-reset':
                $this->emailSender->sendType(new TemplateType(
                    $this->defaultEmailFrom,
                    $user->getEmail(),
                    'Retrieve your password on toto.com',
                    'AppBundle:Emails:reset_password.html.twig',
                    ['link' => str_replace('{token}', $user->getConfirmationToken(), $this->linkTemplates[$transport])]
                ));

                break;
            default:
                throw new UnknownTransportException();
        }
    }
}
