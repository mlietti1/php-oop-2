<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
  public $type;
  public $weight;
  public $flavor;

  public function __construct($_id, $_name, $_brand, Category $_category, $_price, $_is_available, $_image, $_type, $_weight, $_flavor)
  {
    parent::__construct($_id, $_name, $_brand, $_category, $_price, $_is_available, $_image);

    $this->type = $_type;
    $this->weight = $_weight;
    $this->flavor = $_flavor;
  }
}
