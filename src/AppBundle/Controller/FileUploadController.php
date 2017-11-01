<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Oneup\UploaderBundle\Controller\BlueimpController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class FileUploadController
 */
class FileUploadController extends BlueimpController
{
    /**
     * Upload file to server
     *
     * @ApiDoc(
     *     resource = true,
     *     description = "Upload file to server",
     *     parameters={
     *         {
     *             "name"="file",
     *             "dataType"="file",
     *             "required"=true
     *         }
     *     },
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         404 = "Returned when the entity is not found"
     *     },
     *     section = "File upload",
     * )
     *
     *
     * @return Response
     */
    public function upload()
    {
        return parent::upload();
    }
}