<?php

class Card
{
    public $balance;
    public $number;
    public $payment;

    public function __construct($balance, $number, $payment)
    {
        $this->balance = $balance;
        $this->number = $number;
        $this->payment = $payment;
    }

    public function pay()
    {
        $this->balance -= $this->payment;
    }
}
