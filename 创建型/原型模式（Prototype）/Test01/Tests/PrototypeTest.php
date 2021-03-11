<?php


namespace Prototype\Test01\Tests;

use Prototype\Test01\BarBookPrototype;
use Prototype\Test01\FooBookPrototype;

include("../FooBookPrototype.php");
include("../BarBookPrototype.php");


class PrototypeTest
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i . PHP_EOL);
            echo $book->getTitle();
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i . PHP_EOL);
            echo $book->getTitle();
        }
    }
}

$prototype = new PrototypeTest();
$prototype->testCanGetFooBook();