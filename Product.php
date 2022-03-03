<?php

require_once __DIR__ . '/Shop.php';

class Product extends Shop
{
    public $product_name;
    public $product_price;
    public $discount;

    public function __construct($log_in, $name, $product_name, $product_price, $discount)
    {
        parent::__construct($log_in, $name);
        $this->product_name = $product_name;
        $this->setPrice($product_price);
        $this->setDiscount($discount);
    }

    public function setDiscount($discount)
    {
        if ($this->log_in) {
            $this->discount = $discount;
            return 20;
        } else {
            $this->discount = $discount;
            return 0;
        }
    }

    public function setPrice($product_price)
    {
        $this->product_price = $product_price / ($this->discount);
    }
}

echo $my_product = new Product(true, "sasha", "croccantini", "50", 20);
