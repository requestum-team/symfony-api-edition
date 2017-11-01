<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BaseController extends Controller
{
    /**
     * @param $name
     * @return Response
     */
    protected function action($name)
    {
        return $this->get($name)->executeAction($this->get('request_stack')->getCurrentRequest());
    }
}