<?php

class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

}
$dog = new Category('Dog');
$cat = new Category('Cat');