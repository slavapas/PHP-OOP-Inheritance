<?php

/**
 * Book Class
 */

class Book extends Product
{
  public $name;
  public $price;
  public $numPages;

  public function __construct($name, $price, $numPages = null)
  {
    parent::__construct($name, $price);
    $this->numPages = $numPages;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "Pages: $this->numPages";
    return $out;
  }
}
