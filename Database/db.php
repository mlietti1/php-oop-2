<?php

require_once __DIR__ . '../Models/Category.php';
require_once __DIR__ . '../Models/Product.php';
require_once __DIR__ . '../Models/Food.php';
require_once __DIR__ . '../Models/Toy.php';
require_once __DIR__ . '../Models/Accessory.php';


$foods = [
  new Food(1, 'Monge All Breeds Salmon and Rice', 'Monge', new Category('dog', 'fa-dog'), '45,90', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757261187', 'dry', '12kg', 'Salmon'),

  new Food(2, 'Stuzzy Dog Monoprotein', 'Stuzzy', new Category('dog', 'fa-dog'), '3,75', 'https://arcaplanet.vtexassets.com/arquivos/ids/257859/stuzzy-monoprotein-agnello-.jpg?v=1757264884', 'wet', '800g', 'pork'),

  new Food(3, 'Royal Canin Sterilized Cat', 'Royal Canin', new Category('cat', 'fa-cat'), '71,00', 'https://arcaplanet.vtexassets.com/arquivos/ids/238812/royal-canin-sterilized-gatto.jpg?v=1757262977', 'dry', '10kg', $_flavor = null),

  new Food(4, 'Royal Canin Kitten', 'Royal Canin', new Category('cat', 'fa-cat'), '1,09', 'https://arcaplanet.vtexassets.com/arquivos/ids/271911/Kitten_wet_Salsa.jpg?v=1757251941', 'wet', '85g', $_flavor = null)

];

$toys = [];
