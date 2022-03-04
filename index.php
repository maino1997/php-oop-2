<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Shop.php';
include_once __DIR__ . '/Person.php';
include_once __DIR__ . '/Card.php';
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/Toy.php';





$my_person = new Person("sasha", 52);

$my_product = new Product($my_person->name, "croccantini", 70);


$my_food = new Food($my_person->name, "croccantini", 25, [
    'carne' => 'carne',
    'pesce' => 'pesce'
], 'croccante', '40g');
$my_toy = new Toy($my_person->name, "croccantini", 45, 'yellow', 'carne', '50g');



$my_product->setDiscount();
$my_product->setPartial($my_product->product_price);
$my_product->setPrice($my_product->product_price);
$my_food->setDiscount();
$my_food->setPartial($my_food->product_price);
$my_food->setPrice($my_food->product_price);
$my_toy->setDiscount();
$my_toy->setPartial($my_toy->product_price);
$my_toy->setPrice($my_toy->product_price);
$my_card = new Card(1000, 15466, $my_product->product_price, "2022-03-6");
$my_card->setBalance($my_card->balance, $my_card->payment);
$my_user = new User($my_person->name, $my_person->age, $my_card);

$my_neg = new Shop($my_person->name);



var_dump($my_product);


var_dump($my_food);
var_dump($my_toy);
var_dump($my_product->discount);


var_dump($my_user);
