<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/PetHome.php';
include __DIR__ . '/../Models/Game.php';

$products = [
    $product1 = new Product('Cuccia per cane', 10.99, 'Descrizione di prova', 'Not Defined'),
    $product2 = new Food('Cibo per cani', 29.99, 'Cibo per cani di ottima qualità', 'Not Defined', 'pollo e manzo', 3),
    $product3 = new PetHome('Doghouse Cucciolotta Classic', 552.50, 'Casa per cani in legno', 'Not Defined', '85 x 100 x 86 cm'),
    $product4 = new Game('Pups Toy Bird', 8.95, 'Gioco per cani, corda stilizzata', 'Not Defined', 'Bird', 'Lightblue')
];