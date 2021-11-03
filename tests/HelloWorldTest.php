<?php

declare(strict_types=1);

use Example\Classes\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * @covers \Example\Classes\HelloWorld::getHelloWorld()
     */
    public function testShouldCheckIfBasketContainsAllNecessaryFields(): void
    {
        $example = new HelloWorld();
        self::assertEquals("Hello World!", $example->getHelloWorld(), "sayHello() method is printing wrong string");
    }
}