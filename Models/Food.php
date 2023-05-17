<?php

class Food extends Product
{
    public
    $ingredients, $size;

    public function __construct(string $title, float $price, string $description, string $image, string $ingredients, float $size)
    {
        parent::__construct($title, $price, $description, $image);
        $this->ingredients = $ingredients;
        $this->size = $size;
    }
}