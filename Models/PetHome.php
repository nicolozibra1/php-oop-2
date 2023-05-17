<?php

class PetHome extends Product
{
    public
    $dimensions;

    public function __construct(Category $category, string $title, float $price, string $description, string $image, string $dimensions)
    {
        parent::__construct($category, $title, $price, $description, $image);
        $this->dimensions = $dimensions;
    }
}