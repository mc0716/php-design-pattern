<?php


namespace FactoryMethod\Test01;


class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}