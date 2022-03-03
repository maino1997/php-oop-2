<?php

require_once __DIR__ . '/Shop.php';

class Product extends Shop
{
    public $product_name;
    public $product_price;
    public $discount;

    public function __construct($name, $product_name, $product_price)
    {
        parent::__construct($name);
        $this->product_name = $product_name;
        $this->setPrice($product_price);
        $this->setDiscount($product_price);
    }



    public function setDiscount($name)
    {
        if (strlen($name) > 0) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function setPrice($product_price)
    {
        $this->product_price = $product_price - ($product_price / 100 * ($this->discount));
    }
}
