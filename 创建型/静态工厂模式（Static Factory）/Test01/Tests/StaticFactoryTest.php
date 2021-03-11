<?php


namespace StaticFactory\Test01\Tests;


use StaticFactory\Test01\StaticFactory;


class StaticFactoryTest
{
    public function testCanCreateNumberFormatter()
    {
        StaticFactory::factory('number');
    }

    public function testCanCreateStringFormatter()
    {
        StaticFactory::factory('string');
    }

    public function testException()
    {
        StaticFactory::factory('object');
    }
}