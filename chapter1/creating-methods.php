<?php

//create a class
class Product 
{
  //creating properties (visibility key word = public, protected and private)
  public $name= 'soap';
  public $price; #cents

  //creating a Method

  public function priceAsCurrency()
  {
    $priceAsCurrency = $this->price / 100;
    return $priceAsCurrency;
  }
}

$soapObject1 = new Product();
$soapObject1->price = 600;
$priceAsCurrency = $soapObject1->priceAsCurrency();

$soapObject2 = new Product();
$soapObject2->price = 550;

$priceAsCurrency1 = $soapObject1->priceAsCurrency();
$priceAsCurrency2 = $soapObject2->priceAsCurrency();



var_dump($priceAsCurrency1) . PHP_EOL;
var_dump($priceAsCurrency2) . PHP_EOL;