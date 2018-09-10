<?php

namespace Tests\AppBundle\Action;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\PropertyAccess\Exception\AccessException;
use Symfony\Component\PropertyAccess\PropertyAccess;

trait ArrayPathTrait
{
    protected static function getPath($array, $path)
    {
        try {
            return PropertyAccess::createPropertyAccessorBuilder()
                ->enableExceptionOnInvalidIndex()
                ->getPropertyAccessor()
                ->getValue($array, $path)
            ;
        } catch (AccessException $exception) {
            static::fail('Failed assert that array has path "'.$path);
        }
    }
}
