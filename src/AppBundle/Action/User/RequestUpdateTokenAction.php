<?php

namespace AppBundle\Action\User;

use AppBundle\Entity\User;
use AppBundle\Service\UpdateTokenSender\Exception\UnknownTransportException;
use Requestum\ApiBundle\Action\EntityAction;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Class RequestUpdateTokenAction
 */
class RequestUpdateTokenAction extends EntityAction
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|Response
     *
     * @throws \Exception
     */
    public function executeAction(Request $request)
    {
        /** @var User $user */
        $user = $this->getEntity($request, 'email');

        $form = $this->get('form.factory')->createNamedBuilder('')
            ->add('transport')
            ->setMethod(Request::METHOD_POST)
            ->getForm()
            ->handleRequest($request)
        ;

        if (!$form->isSubmitted()) {
            throw new BadRequestHttpException('Wrong request');
        }

        try {
            $user->setConfirmationToken($this->generateToken());
            $this->get('app.service.update_token_sender')->send($form->get('transport')->getData(), $user);
            $this->getDoctrine()->getManager()->flush();

            return $this->handleResponse(null, Response::HTTP_NO_CONTENT);
        } catch (UnknownTransportException $exception) {
            $form->get('transport')->addError(
                new FormError(
                    'Unknown transport',
                    null,
                    [],
                    null,
                    'error.constraint.unknown_transport'
                )
            );

            return $this->handleResponse($form, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

    /**
     * @return string
     */
    private function generateToken()
    {
        return 't_'.rtrim(strtr(hash('sha256', rand()), '+/', '-_'), '=');
    }
}
