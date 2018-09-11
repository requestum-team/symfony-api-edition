<?php

namespace AuthBundle\Controller;

use AppBundle\Controller\BaseController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TokenController extends BaseController
{
    /**
     * @Route(path="/oauth/token", methods={"POST"})
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        return $this->get('fos_oauth_server.controller.token')->tokenAction($request);
    }
}
