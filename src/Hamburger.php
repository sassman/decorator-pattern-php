<?php

namespace BurgerShop;

class Hamburger implements Billable
{
    public function getPrice()
    {
        return 3.99;
    }
}