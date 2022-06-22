<?php
class BaseClass
{
  public $publicProperty = 'Public properties and methods can be accessed anywhere in your code';

  protected $protectedProperty = 'Protected properties and methods can be accessed within the declaring class or from a SubClass';

  Private $privateProperty = "Private properties and methods can be accessed in the class only";

  public function getPrivateProperty():string //this method would only work in the BaseClass
  {
    return $this->privateProperty;
  }

}