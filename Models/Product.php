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
        $info = "<span>Categoria: {$this->category->category}</span>
                 <span>Prezzo: $this->price</span>
                 <span>Descrizione: $this->description</span>";
    
        if (isset($this->ingredients)) {
            $info .= "<span>Ingredienti: $this->ingredients</span>";
        }
        if (isset($this->size)) {
            $info .= "<span>Formato: $this->size kg</span>";
        }
        if (isset($this->dimensions)) {
            $info .= "<span>Dimensioni: $this->dimensions</span>";
        }
        if (isset($this->looks)) {
            $info .= "<span>Sembianze: $this->looks</span>";
        }
        if (isset($this->color)) {
            $info .= "<span>Colore: $this->color</span>";
        }

    
        return $info;
    }
}