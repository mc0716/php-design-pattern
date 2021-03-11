<?php


namespace Prototype\Test01;

//include ("BookPrototype.php");


class BarBookPrototype extends BookPrototype
{
    protected $category = 'bar';

    public function __clone()
    {

    }
}