<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Shop.php';
include_once __DIR__ . '/Person.php';
include_once __DIR__ . '/Card.php';
include_once __DIR__ . '/User.php';



$my_person = new Person("sasha", 52);

$my_product = new Product($my_person->name, "croccantini", 70);
$my_product1 = new Product($my_person->name, "cuccia", 70);
$my_product2 = new Product($my_person->name, "gioco", 70);
$my_card = new Card(1000, 15466, $my_product->product_price, "2022-03-3");
$my_user = new User($my_person->name, $my_person->age, $my_card);

$my_neg = new Shop($my_person->name);



var_dump($my_product);
var_dump($my_product1);
var_dump($my_product2);
var_dump($my_product->discount);


var_dump($my_user);
