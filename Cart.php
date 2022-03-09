<?php

class Cart
{
    private $total = [];
    private $sum = 0;

    public function __construct($total)
    {
        $this->setTotal($total);
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }



    public function getSum()
    {
        $this->sum = 0;
        foreach ($this->total as $object) {
            $price = $object->product_price;
            $this->sum += $price;
        }
        return $this->sum;
    }
}
