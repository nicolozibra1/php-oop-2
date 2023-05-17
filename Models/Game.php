<?php

class Game extends Product
{
    public
    $looks, $color;

    public function __construct(Category $category, string $title, float $price, string $description, string $image, string $looks, string $color)
    {
        parent::__construct($category, $title, $price, $description, $image);
        $this->looks = $looks;
        $this->color = $color;
    }
}