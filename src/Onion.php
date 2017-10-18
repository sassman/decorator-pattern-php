<?php

namespace BurgerShop;

class Onion extends Product
{
    public function getPrice()
    {
        return parent::getPrice() + 0.2;
    }
}