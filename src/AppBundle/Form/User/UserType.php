<?php

namespace AppBundle\Form\User;

use AppBundle\Entity\User;
use Requestum\ApiBundle\Form\Type\AbstractApiType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class UserType
 */
class UserType extends AbstractApiType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email', EmailType::class)
            ->add('plainPassword')
        ;
    }
}