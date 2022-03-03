<?php

include_once __DIR__ . '/Product.php';
// include_once __DIR__ . '/Shop.php';

// $my_neg = new Shop(true, "sasha");

$my_product = new Product("sasha", "croccantini", 50);
var_dump($my_product);
