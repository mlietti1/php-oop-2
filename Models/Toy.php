<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product
{
  public $feature;
  public $size;

  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_image, $_feature, $_size)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available, $_image);

    $this->feature = $_feature;
    $this->size = $_size;
  }
}
