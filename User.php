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
        $my_new_order = new Food($this->name, $order_place, $order_price, "yellow", 'plastic', '500g');
        $my_new_order->setDiscount();
        $my_new_order->setPartial($my_new_order->product_price);
        $my_new_order->setPrice($my_new_order->product_price);
        if (!$my_new_order instanceof Product) throw new Exception('L\'ordine deve essere istanza di Product');
        $this->orders[] = $my_new_order;
    }
}
