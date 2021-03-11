<?php


namespace FactoryMethod\Test01;


interface LoggerFactory
{
    public function createLogger(): Logger;
}