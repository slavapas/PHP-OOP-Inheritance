<?php
class Oldbook extends Book
{
  public $name;
  public $price;
  public $numPages;
  public $year;

  public function __construct($name, $price, $numPages, $year)
  {
    parent::__construct($name, $price, $numPages);
    $this->year = $year;
  }

  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= "Year: $this->year";
    return $out;
  }
}
