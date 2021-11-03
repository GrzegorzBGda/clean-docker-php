<?php

use Example\Classes\HelloWorld;

require_once __DIR__ . '/../vendor/autoload.php';

$example = new HelloWorld();
echo $example->getHelloWorld();
