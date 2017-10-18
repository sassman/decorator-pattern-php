<?php

namespace BurgerShop;

class Product implements Billable
{
    /**
     * @var Billable
     */
    private $onTheBurger;

    public function __construct(Billable $onTheBurger = null)
    {
        $this->onTheBurger = $onTheBurger;
    }

    /**
     * @return double
     */
    public function getPrice()
    {
        if($this->onTheBurger) {
            return $this->onTheBurger->getPrice();
        }
        return 0;
    }
}