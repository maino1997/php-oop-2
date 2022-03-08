<?php

class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name)
    {
        $trimmed_name = trim($name);
        if (!is_string($trimmed_name)) {
            throw new Exception('Il nome deve essere una stringa');
        } else {
            $this->name = $trimmed_name;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        if (!is_numeric($age)) throw new Exception('L\'età deve essere un numero');
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}
