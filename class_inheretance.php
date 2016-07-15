<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels(){
            $this->wheels = 10;
    }
    function CreateDoors(){
            $this->doors = 6;
    }
}
$bmw = new Car(); //make an object

class Plane extends Car{ // plane inherit a car 
    
}

$jet = new Plane(); 
$jet->MoveWheels(); //move wheels of object a car
echo $jet->wheels; //but if call value of $jet we're able to call wheels from a car


?>