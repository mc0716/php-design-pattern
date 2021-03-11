<?php

namespace SimpleFactory\Test01\Tests;

use SimpleFactory\Test01\SimpleFactory;
use SimpleFactory\Test01\Bicycle;

include("../SimpleFactory.php");

class SimpleFactoryTest
{
    public function testCanCreateBicycle()
    {
        $bicyle = (new SimpleFactory())->createBicycle();
        echo $bicyle->driveTo('北京');
    }
}