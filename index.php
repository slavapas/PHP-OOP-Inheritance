<?php

/**
 * Main File
 */

include_once "classes/Product.php";
include_once "classes/BookProduct.php";
include_once "classes/NoteBookProduct.php";



// create objects
$book = new Book("Bible", "free", 1455233);
$notebook = new Notebook("Macbook", "1000 USD", "Intel");

// display print_r
function debug($var)
{
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

debug($book);
debug($notebook);


// display objects
echo $book->getProduct();
echo $notebook->getProduct();
