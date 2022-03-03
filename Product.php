<?php

// require_once __DIR__ . '/Shop.php';

class Product
{
    public $product_name;
    public $product_price;
    public $discount;
    public $name;

    public function __construct($name, $product_name, $product_price)
    {
        $this->name = $name;
        $this->product_name = $product_name;
        $this->setPrice($product_price);
        $this->setDiscount();
    }



    public function setDiscount()
    {
        if (true) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function setPrice($product_price)
    {
        $this->product_price = $product_price - ($product_price / 20);
    }
}
