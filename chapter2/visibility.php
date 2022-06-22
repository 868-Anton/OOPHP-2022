<?php


require_once "SubClass.php";

// print $SubClass->publicProperty;

// print $SubClass->protectedProperty; // cannot access a protected property out of the class or subclass

// print $SubClass->getProtectedProperty();// only through a public method we then can.

// print $SubClass->privateProperty; //cannot access private property outside its class 

//print $SubClass->getPrivateProperty(); // works if this logic is the BaseClass
print $SubClass->getPrivateProperty(); // works if this logic is the BaseClass