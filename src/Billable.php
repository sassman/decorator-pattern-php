<?php

namespace BurgerShop;

interface Billable
{
    /**
     * @return double
     */
    public function getPrice();
}