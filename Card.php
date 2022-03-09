<?php

class Card
{
    public $balance;
    public $number;
    public $payment;
    public $expiration_date;
    public $date;


    public function __construct($balance, $number, $expiration_date)
    {
        $this->balance = $balance;
        $this->number = $number;
        $this->expiration_date = strtotime($expiration_date);
        $this->date = strtotime(date("Y-m-d"));
    }

    public function setBalance($balance, $payment)
    {
        if ($this->expiration_date <= $this->date) {
            $this->balance = $balance;
            return false;
        } else {
            $this->balance = $balance;
            $this->balance = $this->balance - $payment;
            return true;
        }
    }
}
