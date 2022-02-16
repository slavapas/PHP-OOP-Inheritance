<?php

/**
 * NoteBook Class
 */

class Notebook extends Product
{
  public $name;
  public $price;
  public $cpu;

  public function __construct($name, $price, $cpu = null)
  {
    parent::__construct($name, $price);
    $this->cpu = $cpu;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "CPU: $this->cpu";
    return $out;
  }
}
