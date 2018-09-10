<?php

namespace Tests\AppBundle\Action;

use PHPUnit\Util\Test;

trait ClassUtilsTrait
{
    public function getMethodAnnotationValue($annotation)
    {
        $annotations = Test::parseTestMethodAnnotations(get_called_class(), $this->getName(false));

        if (!isset($annotations['method'][$annotation])) {
            return null;
        }

        return $annotations['method'][$annotation];
    }

    public function getPrivateProperty($object, $propertyName)
    {
        $closure = function () use ($propertyName) {
            return $this->$propertyName;
        };

        return $closure->call($object);
    }
}
