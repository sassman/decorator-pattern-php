<?php

namespace BurgerShop;

require __DIR__ . '/../vendor/autoload.php';

$bill = new Bill();
$bill->addProduct(new Hamburger());
$bill->addProduct(new CheeseburgerWithOnion());
$bill->addProduct(new CheeseburgerWithDoubleCheese());

printf("==============================\n");
printf("Total is %2.2f\n", $bill->getTotal());