<?php

/**
 * Main File
 */

include_once "classes/Product.php";
include_once "classes/BookProduct.php";
include_once "classes/NoteBookProduct.php";
include_once "classes/OldBookProduct.php";



// create objects
$book = new Book("Bible", "free", 1455233);
$notebook = new Notebook("Macbook", "3000USD", "Intel");
$oldbook = new Oldbook("Encyclopedia", "100USD", 200, 1981);

// display print_r
function debug($var)
{
  echo '<pre>';
  print_r($var);
  echo '</pre>';
}

debug($book);
debug($notebook);
debug($oldbook);


// display objects
echo nl2br($book->getProduct());
echo nl2br($notebook->getProduct());
echo nl2br($oldbook->getProduct());
