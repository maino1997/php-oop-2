<?php

class Shop
{
    protected $log_in;
    public $name;

    public function __construct($log_in, $name)
    {
        $this->setLogIn($log_in);
        $this->name = $name;
    }

    public function setLogIn($log_in)
    {
        if ($this->name) {
            $this->log_in = $log_in;
            return true;
        }
        $this->log_in = $log_in;
        return false;
    }
}
