<?php

require_once __DIR__ . '/Shop.php';

class Product extends Shop
{
    public $product_name;
    public $product_price;
    public $partial;
    public $discount;

    public function __construct($name, $product_name, $product_price)
    {
        parent::__construct($name);
        $this->product_name = $product_name;
        $this->setPrice($product_price);
        $this->setPartial($product_price);
    }



    public function setDiscount()
    {
        if (strlen($this->name) > 0) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function setPartial($product_price)
    {
        $this->partial = ($product_price / 100 * ($this->discount));
    }

    public function setPrice($product_price)
    {
        $this->product_price = $product_price;
        $this->product_price = $this->product_price - $this->partial;
    }
}
