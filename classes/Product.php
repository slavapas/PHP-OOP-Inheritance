<?php

/**
 * Product Class
 */

class Product
{
  public $name;
  public $price;

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getProduct()
  {
    return "\n Name: {$this->name} \n
            Price: {$this->price} \n";
  }
}
