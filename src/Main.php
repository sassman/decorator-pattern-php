<?php

namespace BurgerShop;

require __DIR__ . '/../vendor/autoload.php';

$bill = new Bill();
$bill->addProduct(new Hamburger());
$bill->addProduct(new Cheeseburger(new Onion()));
$bill->addProduct(new Cheeseburger(new Cheese()));

printf("==============================\n");
printf("Total is %2.2f\n", $bill->getTotal());