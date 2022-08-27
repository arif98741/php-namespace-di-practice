<?php

namespace App\DependentClass;

use App\Inter\ClassInterface;

class Python implements ClassInterface
{

    /**
     * @return mixed
     */
    public function calledClass()
    {
        echo 'Hello I am talking from inside java class';
    }

    /**
     * @return mixed
     */
    public function classDefintion()
    {
        return self::class;
    }
}