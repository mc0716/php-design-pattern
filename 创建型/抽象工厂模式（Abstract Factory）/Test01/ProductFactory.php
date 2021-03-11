<?php

// 产品工厂

class ProductFactory
{
    // 运输成本
     const SHIPPING_COSTS = 50;

     // 创建运输产品
     public function createShippableProduct(int $price): Product
     {
         return new ShippableProduct($price,self::SHIPPING_COSTS);
     }

     // 创建数码产品
     public function createDigitallProduct(int  $price): Product
     {
         return new DigitallProduct($price);
     }
}