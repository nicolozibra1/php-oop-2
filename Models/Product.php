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

    public function getInfo()
    {   
        $info = "<span class='fw-semibold'>Prezzo:</span><span> {$this->price}&euro;</span>
                 <span><span class='fw-semibold'>Descrizione:</span> {$this->description}</span>";
        if (isset($this->ingredients)) {
            $info .= "<span class='fw-semibold'>Ingredienti:</span><span> $this->ingredients</span>";
        }
        if (isset($this->size)) {
            $info .= "<span class='fw-semibold'>Formato:</span><span> $this->size kg</span>";
        }
        if (isset($this->dimensions)) {
            $info .= "<span class='fw-semibold'>Dimensioni:</span> $this->dimensions</span>";
        }
        if (isset($this->looks)) {
            $info .= "<span class='fw-semibold'>Somiglianza:</span> $this->looks</span>";
        }
        if (isset($this->color)) {
            $info .= "<span class='fw-semibold'>Colore:</span> $this->color</span>";
        }

    
        return $info;
    }
    public function getIcon()
    {
        $icon = "<i class='{$this->category->category}'></i>";
        return $icon;
    }
}