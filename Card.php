<?php

class Card
{
    public $balance;
    public $number;
    public $payment;

    public function __construct($balance, $number, $payment)
    {
        $this->setBalance($balance, $payment);
        $this->number = $number;
        $this->payment = $payment;
    }

    public function setBalance($balance, $payment)
    {
        $this->balance = $balance;
        $this->balance = $this->balance - $payment;
    }
}
