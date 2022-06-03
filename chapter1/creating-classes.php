<?php

//create a class
class Product 
{
  //creating properties (visibility key word = public, protected and private)
  public $name= 'soap';
  public $price= 20;
}

//instantiating a class 
//this is called an object
$productObject = new Product();
$productObject2 = new Product();

$soapObject = new Product();

//Using the object operator to access a public property 
print $soapObject->name . "\n";
print $soapObject->price . "\n";;

//Reassigning a public property 
print $soapObject->name = 'toothpaste' . "\n";;
print $soapObject->price = 30 . "\n";;