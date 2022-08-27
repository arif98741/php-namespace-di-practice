<?php

namespace App;

class ObjectClass
{

    /**
     * @var Program
     */
    private Program $java;
    /**
     * @var Program
     */
    private Program $php;

    /**
     * @param Program $java
     * @param Program $php
     */
    public function __construct(Program $java, Program $php)
    {
        $this->java = $java;
        $this->php = $php;
    }

    /**
     * @return void
     */
    public function javaMethod(): void
    {
        $this->java->helloWorld();
    }

    /**
     * @return void
     */
    public function phpMethod(): void
    {
        $this->php->helloWorld();
    }
}