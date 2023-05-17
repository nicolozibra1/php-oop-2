<?php

class Food extends Product
{
    public
    $ingredients, $size;

    public function __construct(Category $category, string $title, float $price, string $description, string $image, string $ingredients, float $size)
    {
        parent::__construct($category, $title, $price, $description, $image);
        $this->ingredients = $ingredients;
        $this->size = $size;
    }
}