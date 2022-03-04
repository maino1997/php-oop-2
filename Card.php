<?php

class Card
{
    public $balance;
    public $number;
    public $payment;
    public $expiration_date;
    public $date;


    public function __construct($balance, $number, $payment, $expiration_date)
    {
        $this->setBalance($balance, $payment);
        $this->number = $number;
        $this->payment = $payment;
        $this->expiration_date = strtotime($expiration_date);
        $this->date = strtotime(date("Y-m-d"));
    }

    public function setBalance($balance, $payment)
    {
        // if (true) {
        //     $this->balance = $balance;
        //     return false;
        // } else {
        $this->balance = $balance;
        $this->balance = $this->balance - $payment;
        return true;
        // }
    }
}
