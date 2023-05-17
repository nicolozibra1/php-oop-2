<?php

class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

}
$dog = new Category('Cane');
$cat = new Category('Gatto');