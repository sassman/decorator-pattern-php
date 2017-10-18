<?php

namespace BurgerShop;

class Cheese extends Product
{
    public function getPrice()
    {
        return parent::getPrice() + 0.2;
    }
}