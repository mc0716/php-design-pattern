<?php

// 可装运的产品

class ShippableProduct implements Product
{
    // 产品价格
    private $productPrice;

    // 运输成本
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    // 计算总价格
    public function calculatePrice(): int
    {
        return  $this->productPrice + $this->shippingCosts;
    }
}