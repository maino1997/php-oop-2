<?php

class Cart
{
    private $total = [];
    private $sum;

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

    public function setSum()
    {
        foreach ($this->total as $price) {
            $this->sum += $price;
        }
    }

    public function getSum()
    {
        return $this->sum;
    }
}
