<?php

class People{
    public $name;
    public $age;

    function __construct($personName, $personAge = 0){
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        echo "Assalamu Alaikum\n";
        $this->sayName();
    }

    function sayName(){
        if($this->age){
            echo "My name is {$this->name} and I am {$this->age} years old.\n";
        }else{
            echo "My name is {$this->name} and I am not going to say my name.\n";
        }
    }
}

$obj1 = new People("Soroar", 24);
$obj2 = new People("Farhan", 23);
$obj3 = new People("Auntu");
$obj1->sayHi();
$obj2->sayHi();
$obj3->sayHi();



?>