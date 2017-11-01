<?php

namespace AppBundle\Action\User;

use Requestum\ApiBundle\Action\FetchAction;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class FetchCurrentAction
 */
class FetchCurrentAction extends FetchAction
{
    /**
     * {@inheritdoc}
     */
    protected function getEntity(Request $request, $param = null, $useLock = false)
    {
        if (!($user = $this->getUser())) {
            throw $this->createNotFoundException();
        }

        return $user;
    }
}