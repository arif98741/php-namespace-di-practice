<?php

namespace App;

use App\Inter\ClassInterface;

class Program
{
    private ClassInterface $inter;

    /**
     * @param ClassInterface $inter
     */
    public function __construct(ClassInterface $inter)
    {
        $this->inter = $inter;
    }

    public function helloWorld()
    {
        echo '<pre>';
        print_r($this->inter);
        echo '</pre>';

    }
}