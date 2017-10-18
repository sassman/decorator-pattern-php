<?php

namespace BurgerShop;

class Cheeseburger extends Product
{
    public function getPrice()
    {
        return parent::getPrice() + 3.49;
    }
}