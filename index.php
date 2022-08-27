<?php

use App\DependentClass\Java;
use App\DependentClass\Php;
use App\ObjectClass;
use App\Program;

require_once 'vendor/autoload.php';

$javaProgram = new Program(new Java());
$phpProgram = new Program(new Php());


$object = new ObjectClass($javaProgram, $phpProgram);
$object->javaMethod();
$object->phpMethod();

