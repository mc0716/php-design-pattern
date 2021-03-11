<?php


namespace StaticFactory\Test01;


final class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }
    }
}