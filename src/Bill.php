<?php

namespace BurgerShop;

class Bill
{
    /**
     * @var Billable[]
     */
    private $itemsOnTheBill = [];

    public function addProduct(Billable $item)
    {
        $this->itemsOnTheBill[] = $item;
        printf("ordered 1 %s for %2.2f\n", get_class($item), $item->getPrice());
    }

    /**
     * @return double
     */
    public function getTotal()
    {
        $total = .0;
        foreach ($this->itemsOnTheBill as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}