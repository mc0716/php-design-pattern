<?php

// 抽象工厂

class AbstractFactoryTest
{
    // 测试计算运输成本的价格
    public function testCanCalculatePriceForShippableProduct()
    {
        $factor = new ProductFactory();
        $product = $factor->createShippableProduct(150);
        echo $product->calculatePrice();
    }

    // 测试计算数码产品的价格
    public function testCanCalculatePriceForDigitalProduct()
    {
        $factor = new ProductFactory();
        $product = $factor->createDigitallProduct(150);
        echo $product->calculatePrice();
    }
}