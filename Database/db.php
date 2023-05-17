<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';

$products = [
    $product1 = new Product('Cuccia per cane', 10.99, 'Not Defined'),
    $product2 = new Food('Cibo per cani', 29.99, 'Not Defined', 'Cibo per cani di ottima qualità', 'pollo e manzo', 3)
];