<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Shop.php';
include_once __DIR__ . '/Person.php';
include_once __DIR__ . '/Card.php';
include_once __DIR__ . '/User.php';
include_once __DIR__ . '/Food.php';
include_once __DIR__ . '/Toy.php';
include_once __DIR__ . '/Cart.php';
include_once __DIR__ . '/Order.php';


$my_person = new Person("sasha", 52);



// $my_product = new Product($my_person->getName(), "croccantini", 70);
// $my_food = new Food($my_person->getName(), "croccantini", 50, [
//     'carne' => 'carne',
//     'pesce' => 'pesce'
// ], 'croccante', '40g');
// $my_toy = new Toy($my_person->getName(), "croccantini", 60, 'yellow', 'carne', '50g');
// $my_product->setDiscount();
// $my_product->setPartial($my_product->product_price);
// $my_product->setPrice($my_product->product_price);
// $my_food->setDiscount();
// $my_food->setPartial($my_food->product_price);
// $my_food->setPrice($my_food->product_price);
// $my_toy->setDiscount();
// $my_toy->setPartial($my_toy->product_price);
// $my_toy->setPrice($my_toy->product_price);



$my_card = new Card(1000, 15466, "2022-03-10");

$my_user = new User($my_person->getName(), $my_person->getAge(), $my_card);
$my_user->placeOrder("pesce", 41);
$my_user->placeOrder("carne", 30);
$my_user->placeOrder("carne", 400);
$my_cart = new Cart($my_user->orders);
$my_order = new Order($my_card, $my_user, $my_cart->getTotal(), $my_cart);

$my_cart->getSum();
$my_order->setCardBalance($my_cart->getSum());

var_dump($my_order);
var_dump($my_cart);
var_dump($my_card);



foreach ($my_order->getTotal() as $item) {
    echo "<br> Il prezzo scontato è $item->product_price <br>";
}
$totale = $my_cart->getSum();
echo "<br> Il totale è $totale<br>";
