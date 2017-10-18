<?php

namespace BurgerShop;

class CheeseburgerWithDoubleCheese extends Cheeseburger
{
    public function getPrice()
    {
        return parent::getPrice() + 0.99;
    }
}