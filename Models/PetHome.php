<?php

class PetHome extends Product
{
    public
    $dimensions;

    public function __construct(string $title, float $price, string $description, string $image, string $dimensions)
    {
        parent::__construct($title, $price, $description, $image);
        $this->dimensions = $dimensions;
    }
}