<?php

namespace Singleton\Test01;


final class Singleton
{
    private static $instance;

    private $data = [];

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }

    public function getValue(string $key): string
    {
        return $this->data[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->data[$key] = $value;
    }
}

$object1 = Singleton::getInstance();
$object1->setValue('name','foo');
$object2 = Singleton::getInstance();
echo $object2->getValue('name') === 'foo';