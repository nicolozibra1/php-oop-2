<?php

class Product
{
    public
    $title, $price, $image;

    public function __construct(string $title, float $price, string $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }

    public function getFullProduct()
    {
        return "$this->title $this->price";
    }
}