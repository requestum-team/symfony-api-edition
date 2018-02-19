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
     * @ApiDoc(
     *     resource = true,
     *     description = "Get token",
     *     statusCodes = {
     *         200 = "Returned when successful"
     *     },
     *     parameters={
     *          {"name"="grant_type", "dataType"="string", "required"=true, "description"="Which grant you need. Can be `token`, `password`, `client_credentials` and `refresh_token`"},
     *          {"name"="client_id", "dataType"="string", "required"=true, "description"="Client id for Api"},
     *          {"name"="client_secret", "dataType"="string", "required"=true, "description"="Client secret for Api"},
     *          {"name"="username", "dataType"="string", "required"=true, "description"="User username"},
     *          {"name"="password", "dataType"="string", "required"=true, "description"="User password"},
     *     },
     *     section = "Security",
     * )
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        return $this->get('fos_oauth_server.controller.token')->tokenAction($request);
    }
}
