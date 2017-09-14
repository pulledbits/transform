<?php

namespace pulledbits\Transform;

class Struct
{
    private $fields;

    public function __construct()
    {
        $this->fields = func_get_args();
    }

    final public function __get(string $identifier) {
        return $this->fields[$identifier];
    }

    final public function __set(string $property, $value) {
        $this->fields[$property] = $value;
    }

    public function map(string $identifier, $value) {
        $this->__set($identifier, $value);
    }
}