<?php

require_once __DIR__ . '/Person.php';

class User extends Person
{
    public $card;

    public function __construct($name, $age, $card)
    {
        parent::__construct($name, $age);

        $this->card = $card;
    }
}
