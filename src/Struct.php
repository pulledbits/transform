<?php

namespace pulledbits\Transform;

class Struct
{
    private $data;

    public function __construct()
    {
        $this->data = func_get_args();
    }

    final public function __get(string $identifier) {
        return $this->$identifier;
    }

    final public function __set(string $property, $value) {
        $this->$property = $value;
    }

    public function map(string $identifier, $value) {
        $this->__set($identifier, $value);
    }
}