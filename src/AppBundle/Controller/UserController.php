<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class UserController extends BaseController
{
    /**
     * @Route(path="/users", methods={"GET"})
     *
     * @ApiDoc(
     *     resource = true,
     *     description = "Get list of users",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         304 = "Returned from cache"
     *     },
     *      parameters={
     *          {"name"="page", "dataType"="int", "required"=false, "description"="Page number"},
     *          {"name"="per-page", "dataType"="int", "required"=false, "description"="Items on page count"},
     *          {"name"="expand", "dataType"="string", "required"=false, "description"="Comma separated fields list to expand"},
     *          {"name"="order-by", "dataType"="string", "required"=false, "description"="sorting by fields (pattern: 'field|order' eg 'name|asc' )"}
     *     },
     *     section = "Users",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        return $this->action("action.user.list");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Gets a current authenticated user for given access token",
     *     output = "User",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         404 = "Returned when the entity is not found"
     *     },
     *     parameters={
     *          {"name"="expand", "dataType"="string", "required"=false, "description"="Comma separated fields list to expand"},
     *     },
     *     section = "Users",
     * )
     *
     * @Route(path="/users/me", methods={"GET"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function fetchCurrentAction()
    {
        return $this->action("action.user.fetch_current");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Gets a user for a given id",
     *     output = "User",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         404 = "Returned when the entity is not found"
     *     },
     *     parameters={
     *          {"name"="expand", "dataType"="string", "required"=false, "description"="Comma separated fields list to expand"},
     *     },
     *     section = "Users",
     * )
     *
     * @Route(path="/users/{id}", methods={"GET"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function fetchAction()
    {
        return $this->action("action.user.fetch");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Creates a new user from the submitted data.",
     *     input = "AppBundle\Form\User\UserType",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         422 = "Returned when the form has errors"
     *     },
     *     section = "Users",
     * )
     *
     * @Route(path="/users", methods={"POST"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        return $this->action("action.user.create");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Update user from the submitted data.",
     *     input = "AppBundle\Form\User\UserType",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         422 = "Returned when the form has errors"
     *     },
     *     section = "Users",
     * )
     *
     * @Route(path="/users/{id}", methods={"PATCH"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateAction()
    {
        return $this->action("action.user.update");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Delete a user by id.",
     *     statusCodes = {
     *         204 = "Returned when successful",
     *         400 = "Returned when 'foreign key constraint violation'"
     *     },
     *     section = "Users",
     * )
     *
     * @Route(path="/users/{id}", methods={"DELETE"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction()
    {
            return $this->action("action.user.delete");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Create request for change password",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         404 = "Returned when the entity is not found"
     *     },
     *     section = "Users reset password",
     * )
     *
     * @Route(path="/users/{email}/forgot-password", methods={"PATCH"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function forgotPasswordAction()
    {
        return $this->action("action.user.forgot_password");
    }

    /**
     * @ApiDoc(
     *     resource = true,
     *     description = "Reset forgotten password",
     *     input = "AppBundle\Form\User\PasswordType",
     *     output = "User",
     *     statusCodes = {
     *         200 = "Returned when successful",
     *         404 = "Returned when the entity is not found"
     *     },
     *     section = "Users reset password",
     * )
     *
     * @Route(path="/users/{confirmationToken}/reset-password", methods={"PATCH"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resetPasswordAction()
    {
        return $this->action("action.user.reset_password");
    }
}