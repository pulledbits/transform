<?php

namespace pulledbits\Transform;


class StructTest extends \PHPUnit_Framework_TestCase
{

    public function test__set_When_IdentifierGiven_Expect_PropertySet() {
        $struct = new class extends Struct {

            public function map(string $identifier, $value)
            {
                $this->$identifier = $value;
            }
        };

        $struct->foo = 'bar';

        $this->assertEquals('bar', $struct->foo);
    }

}
