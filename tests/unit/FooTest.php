<?php

namespace Tests\Unit;

use FizzBuzzKata\Foo;

final class FooTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function returns_true()
    {
        $foo = new Foo();

        $this->assertTrue($foo->returnTrue());
    }
}
