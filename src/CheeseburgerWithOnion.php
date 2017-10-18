<?php

namespace BurgerShop;

class CheeseburgerWithOnion extends Cheeseburger
{
    public function getPrice()
    {
        return parent::getPrice() + .20;
    }
}