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

$toys = [
  new Toy(5, 'KONG Dotz Circle', 'KONG', new Category('dog', 'fa-dog'), '7,56', 'https://arcaplanet.vtexassets.com/arquivos/ids/207398/Kong-Dotz-Circle-Small.jpg?v=1757249547', 'chewing', 'S'),

  new Toy(6, 'KONG Scrunch Knots Raccoon', 'KONG', new Category('dog', 'fa-dog'), '12,90', 'https://arcaplanet.vtexassets.com/arquivos/ids/258241/scrunch-knots-racoon1.jpg?v=1757034748', 'soft', 'M'),

  new Toy(7, 'Flopping Fish Cat Toy', 'Trixie', new Category('cat', 'fa-cat'), '8,20', 'https://arcaplanet.vtexassets.com/arquivos/ids/264784/trixie-pesce-guizzante-gioco-gatto.jpg?v=1757207679', 'moving', 'any'),

  new Toy(8, 'Laser Pointer Cat Toy', 'Ferplast', new Category('cat', 'fa-cat'), '3,85', 'https://arcaplanet.vtexassets.com/arquivos/ids/206799/GIOCO-GATTO-CAT-POINTER-A-LED.jpg?v=1757265453', 'chasing', 'any')

];

$accessories = [
  new Accessory(9, 'Comfort Bed Tartan', 'Lovedi', new Category('dog', 'fa-dog'), '47,90', 'https://arcaplanet.vtexassets.com/arquivos/ids/225157/merci-cane-cuccia-comfort-tartan.jpg?v=1757207376', 'fabric', 'L'),

  new Accessory(10, 'Nylon Collar Red', 'Croci', new Category('dog', 'fa-dog'), '5,80', 'https://arcaplanet.vtexassets.com/arquivos/ids/220938/croci-collare-cane-nylon-rosso.jpg?v=1757121274', 'nylon', 'M'),

  new Accessory(11, 'Cat Tree Baladona Beige', 'Trixie', new Category('cat', 'fa-cat'), '50,00', 'https://arcaplanet.vtexassets.com/arquivos/ids/223801/trixie-gatto-tiragraffi-badalona-beige.jpg?v=1757121092', 'synthetic', 'any'),

  new Accessory(12, 'Gipsy Cat Carrier', 'Croci', new Category('cat', 'fa-cat'), '8,67', 'https://arcaplanet.vtexassets.com/arquivos/ids/227428/croci-gipsy-cane-trasportino-small.jpg?v=1757207738', 'plastic', 'any')

];
