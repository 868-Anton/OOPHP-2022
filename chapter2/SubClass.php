<?php

require_once "BaseClass.php";

// $SubClass = new BaseClass();

class SubClass extends BaseClass
{
  public function getProtectedProperty()
  {
    return $this->protectedProperty;
  }

  // public function getPrivateProperty():string //this method would only work in the BaseClass
  // {
  //   return $this->privateProperty;
  // }


}

$SubClass = new SubClass();

