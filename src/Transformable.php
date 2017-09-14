<?php

namespace pulledbits\Transform;

interface Transformable
{
    function transformTo(Struct $transformation) : void;
}