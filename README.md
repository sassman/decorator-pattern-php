decorator-pattern-php
=====================

Illustrating the usage and the use case of the decorator pattern.
This is only educational material. No production grade code.

The Problem is code like this:
```php
<?php

namespace BurgerShop;

require __DIR__ . '/../vendor/autoload.php';

$bill = new Bill();
$bill->addProduct(new Hamburger());
$bill->addProduct(new CheeseburgerWithOnion());
$bill->addProduct(new CheeseburgerWithDoubleCheese());

printf("==============================\n");
printf("Total is %2.2f\n", $bill->getTotal());
```

The solution is evolving to

```php
<?php

namespace BurgerShop;

require __DIR__ . '/../vendor/autoload.php';

$bill = new Bill();
$bill->addProduct(new Hamburger());
$bill->addProduct(new Cheeseburger(new Onion()));
$bill->addProduct(new Cheeseburger(new Cheese()));

printf("==============================\n");
printf("Total is %2.2f\n", $bill->getTotal());
```

to improve the design, flexibility but most importantly the maintainability.
