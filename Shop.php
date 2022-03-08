<?php

class Shop
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $trimmed_name = trim($name);
        if (!is_string($trimmed_name) || ) {
            throw new Exception('Il nome deve essere una stringa');
        } else {
            $this->name = $trimmed_name;
        }
    }
}
