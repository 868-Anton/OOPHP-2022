<?php


declare(strict_types=1); // ensures the string would be enforced 

require 'Song.php';


$song = new Song('Unchangeable',125); // how to enforce data type

var_dump($song->name); 


