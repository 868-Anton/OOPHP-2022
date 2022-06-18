<?php

require_once 'Book.php';
require_once 'DigitalBook.php';
require_once 'physicalBook.php';

// $physicalBook = new Book('A Random Book','Jane doe',2000);
// $digitalBook = new Book('A Random Book','Jane doe',2000);

$digitalBook = new DigitalBook('Book','digital me',1993,20);
$physicalBook = new PhysicalBook('A Random Book','Jane doe',2000,50);

// print $physicalBook->getAuthor() . PHP_EOL;
// print $digitalBook->getAuthor() . PHP_EOL;

print $digitalBook->print(). PHP_EOL;
print $physicalBook->getAuthor(). PHP_EOL;