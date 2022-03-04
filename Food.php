<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected $ingredients = [];
    protected $type;
    protected $weight;

    public function __construct($name, $product_name, $product_price, $ingredients, $type, $weight)
    {
        parent::__construct($name, $product_name, $product_price);
        $this->setIngredients($ingredients);
        $this->settype($type);
        $this->setWeight($weight);
    }

    public function addIngredient($ingredient)
    {
        $this->ingredients[$ingredient] = $ingredient;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getIngredients($ingredients)
    {
        return $this->ingredients;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType($type)
    {
        return $this->type;
    }

    public function getWeight($weight)
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}
