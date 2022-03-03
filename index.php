<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Shop.php';
include_once __DIR__ . '/Person.php';
include_once __DIR__ . '/Card.php';
include_once __DIR__ . '/User.php';




$my_card = new Card(1000, 15466, 25);

$my_person = new Person("sasha", 52);
$my_user = new User($my_person->name, $my_person->age, $my_card);

$my_neg = new Shop($my_person->name);

$my_product = new Product($my_person->name, "croccantini", 50);
var_dump($my_product);

var_dump($my_user);
