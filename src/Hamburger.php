<?php

namespace BurgerShop;

class Hamburger extends Product
{
    public function getPrice()
    {
        return parent::getPrice() + 3.99;
    }
}