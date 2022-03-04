<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    protected $color;
    protected $material;
    protected $weight;

    public function __construct($name, $product_name, $product_price, $color, $material, $weight)
    {
        parent::__construct($name, $product_name, $product_price);
        $this->setColor($color);
        $this->setMaterial($material);
        $this->setWeight($weight);
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor($color)
    {
        return $this->color;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial($material)
    {
        return $this->material;
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
