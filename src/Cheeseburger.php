<?php

namespace BurgerShop;

class Cheeseburger implements Billable
{
    public function getPrice()
    {
        return 3.49;
    }
}