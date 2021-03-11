<?php

// 数码产品

class DigitallProduct implements Product
{
    // 价格
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    // 总价格
    public function calculatePrice(): int
    {
        return $this->price;
    }
}