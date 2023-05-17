<?php
include __DIR__ .'/Category.php';

class Product
{
    public
    $category, $title, $price, $description, $image;

    public function __construct(Category $category, string $title, float $price, string $description, string $image)
    {   
        $this->category = $category;
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