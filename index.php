<?php

class Human{
    public $name;
    function sayHi(){
        echo "Assalamu Alaikum\n";
    }

    function getName(){
        echo $this->name . "\n";
    }
}

class Dog{
    function sayHi(){
        echo "Ghaou\n";
    }
}
class Cat{
    function sayHi(){
        echo "Meaow\n";
    }
}

$objHuman = new Human();
$objDog = new Dog();
$objCat = new Cat();

$objHuman->sayHi();
$objDog->sayHi();
$objCat->sayHi();
$objHuman->name = "Soroar";
$objHuman->getName();
echo $objHuman->name . "\n";









?>