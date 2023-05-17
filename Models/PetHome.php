<?php

class PetHome extends Product
{
    public
    $description, $dimensions;

    public function __construct(string $title, float $price, string $image, string $description, string $dimensions)
    {
        parent::__construct($title, $price, $image);
        $this->description = $description;
        $this->dimensions = $dimensions;
    }
}