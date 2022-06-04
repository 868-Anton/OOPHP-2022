<?php

//create a class
class Product 
{
  //creating properties (visibility key word = public, protected and private)
  public $name= 'soap';
  public $price; #cents

  //creating a Method
  // method Argument
  // Default value
  public function priceAsCurrency($currencySymbol = '$')
  {
    $priceAsCurrency = $this->price / 100;
    return $currencySymbol . $priceAsCurrency;
  }
}

$soapObject1 = new Product; //note the parentheses is only important if we are passing an argument

$soapObject1->price = 600;

$priceAsCurrency = $soapObject1->priceAsCurrency();

var_dump($priceAsCurrency) . PHP_EOL;
