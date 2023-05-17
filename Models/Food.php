<?php

class Food extends Product
{
    public
    $description, $ingredients, $size;

    public function __construct(string $title, float $price, string $image, string $description, string $ingredients, float $size)
    {
        parent::__construct($title, $price, $image);
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->size = $size;
    }
}