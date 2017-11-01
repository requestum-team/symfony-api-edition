<?php

namespace AppBundle\Action\User;

use Requestum\ApiBundle\Action\EntityAction;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ForgotPasswordAction
 */
class ForgotPasswordAction extends EntityAction
{

    public function executeAction(Request $request)
    {
        if (!($user = parent::getEntity($request, 'email'))) {
            throw $this->createNotFoundException();
        }

        $this->get('app.service.reset_password')->sendEmail($user);

        return $this->handleResponse(true);
    }
}