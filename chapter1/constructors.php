<?php

class newProduct 
{
  //creating properties (visibility key word = public, protected and private)
  public $name;
  public $price; #cents

  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  //creating a Method
  // method Argument
  // Default value
  public function priceAsCurrency($divisor = 1 ,$currencySymbol = '$')
  {
    $priceAsCurrency = $this->price / $divisor;

    return $currencySymbol . $priceAsCurrency;
  }
}

$product = new newProduct('soap',100);

print $product->name .PHP_EOL;
print $product->price .PHP_EOL;
