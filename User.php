<?php

require_once __DIR__ . '/Person.php';

class User extends Person
{
    public $card;
    public $orders = [];

    public function __construct($name, $age, $card)
    {
        parent::__construct($name, $age);

        $this->card = $card;
    }

    public function placeOrder($order_place, $order_price)
    {
        $my_new_order = new Product($this->name, $order_place, $order_price);
        $my_new_order->setDiscount();
        $my_new_order->setPartial($my_new_order->product_price);
        $my_new_order->setPrice($my_new_order->product_price);
        $this->orders[] = $my_new_order;
    }
}
