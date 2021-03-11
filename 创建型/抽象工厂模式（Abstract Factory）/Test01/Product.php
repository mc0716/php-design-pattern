<?php

// 产品接口

interface Product
{
    // 计算产品价格
    public function calculatePrice(): int;
}