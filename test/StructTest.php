<?php

namespace pulledbits\Transform;


class StructTest extends \PHPUnit_Framework_TestCase
{

    public function test__set_When_IdentifierGiven_Expect_PropertySet() {
        $struct = new Struct('foo');

        $struct->foo = 'bar';

        $this->assertEquals('bar', $struct->foo);
    }

    public function testMap_When_IdentifierGiven_Expect_PropertySet() {
        $struct = new Struct('foo');

        $struct->map('foo', 'bar');

        $this->assertEquals('bar', $struct->foo);
    }
}
