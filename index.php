<?php

require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';

require_once __DIR__ . '/Database/db.php';

include __DIR__ . '/Views/layout/head.php';
include __DIR__ . '/Views/layout/header.php';
include __DIR__ . '/Views/partials/product.php';
include __DIR__ . '/Views/layout/footer.php';
