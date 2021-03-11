<?php


namespace Prototype\Test01;

include ("BookPrototype.php");


class FooBookPrototype extends BookPrototype
{
    protected $category = 'foo';

    public function __clone()
    {

    }
}