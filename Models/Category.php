<?php

class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

}
$dog = new Category('fa-solid fa-paw');
$cat = new Category('fa-solid fa-cat');