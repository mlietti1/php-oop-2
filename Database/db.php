<?php

$categories = [
  'dog' => new Category('dog', '<i class="fa-solid fa-dog"></i>'),
  'cat' => new Category('cat', '<i class="fa-solid fa-cat"></i>')
];


$foods = [
  new Food(1, 'Monge All Breeds Salmon and Rice', 'Monge', $categories['dog'], '45,90', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757261187', 'Dry', '12kg', 'Salmon'),

  new Food(2, 'Stuzzy Dog Monoprotein', 'Stuzzy', $categories['dog'], '3,75', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/257859/stuzzy-monoprotein-agnello-.jpg?v=1757264884', 'Wet', '800g', 'pork'),

  new Food(3, 'Royal Canin Sterilized Cat', 'Royal Canin', $categories['cat'], '71,00', false, 'https://arcaplanet.vtexassets.com/arquivos/ids/238812/royal-canin-sterilized-gatto.jpg?v=1757262977', 'Dry', '10kg', $_flavor = null),

  new Food(4, 'Royal Canin Kitten', 'Royal Canin', $categories['cat'], '1,09', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/271911/Kitten_wet_Salsa.jpg?v=1757251941', 'Wet', '85g', $_flavor = null)

];

$toys = [
  new Toy(5, 'KONG Dotz Circle', 'KONG', $categories['dog'], '7,56', false, 'https://arcaplanet.vtexassets.com/arquivos/ids/207398/Kong-Dotz-Circle-Small.jpg?v=1757249547', 'Chewing', 'S'),

  new Toy(6, 'KONG Scrunch Knots Raccoon', 'KONG', $categories['dog'], '12,90', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/258241/scrunch-knots-racoon1.jpg?v=1757034748', 'Soft', 'M'),

  new Toy(7, 'Flopping Fish Cat Toy', 'Trixie', $categories['cat'], '8,20', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/264784/trixie-pesce-guizzante-gioco-gatto.jpg?v=1757207679', 'Moving', 'All'),

  new Toy(8, 'Laser Pointer Cat Toy', 'Ferplast', $categories['cat'], '3,85', false, 'https://arcaplanet.vtexassets.com/arquivos/ids/206799/GIOCO-GATTO-CAT-POINTER-A-LED.jpg?v=1757265453', 'Chasing', 'All')

];

$accessories = [
  new Accessory(9, 'Comfort Bed Tartan', 'Lovedi', $categories['dog'], '47,90', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/225157/merci-cane-cuccia-comfort-tartan.jpg?v=1757207376', 'Fabric', 'L'),

  new Accessory(10, 'Nylon Collar Red', 'Croci', $categories['dog'], '5,80', false, 'https://arcaplanet.vtexassets.com/arquivos/ids/220938/croci-collare-cane-nylon-rosso.jpg?v=1757121274', 'Nylon', 'M'),

  new Accessory(11, 'Cat Tree Baladona Beige', 'Trixie', $categories['cat'], '50,00', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/223801/trixie-gatto-tiragraffi-badalona-beige.jpg?v=1757121092', 'Synthetic', 'All'),

  new Accessory(12, 'Gipsy Cat Carrier', 'Croci', $categories['cat'], '8,67', true, 'https://arcaplanet.vtexassets.com/arquivos/ids/227428/croci-gipsy-cane-trasportino-small.jpg?v=1757207738', 'Plastic', 'All')

];
