<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/PetHome.php';
include __DIR__ . '/../Models/Game.php';

$products = [
    $product1 = new Food($dog, 'Cibo per cani', 29.99, 'Cibo per cani di ottima qualità', 'https://www.hollandanimalcare.nl/imagestream/stream/278107/540/540/1/0/1/MAXA014-max-adult.webp', 'pollo e manzo', 3),
    $product2 = new PetHome($dog, 'Doghouse Cucciolotta Classic', 552.50, 'Casa per cani in legno', 'https://www.hollandanimalcare.nl/imagestream/stream/276755/540/540/1/0/1/HOND902-doghouse-cucciolotta-classic-l.webp', '85 x 100 x 86 cm'),
    $product3 = new Game($dog, 'Pups Toy Bird', 8.95, 'Gioco per cani, corda stilizzata', 'https://www.hollandanimalcare.nl/imagestream/stream/277334/540/540/1/0/1/AFPH04748-afp-pups-pups-teething-toy-bird.webp', 'Uccello', 'Azzurro/Verde')
];