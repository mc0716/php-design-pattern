<?php

namespace SimpleFactory\Test01;

use SimpleFactory\Test01\Bicycle;

include("Bicycle.php");

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
