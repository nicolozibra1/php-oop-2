<?php

class Product
{
    public
    $title, $price, $description, $image;

    public function __construct(string $title, float $price, string $description, string $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
    }

    public function getFullProduct()
    {
        return "$this->title $this->price $this->description";
    }
}