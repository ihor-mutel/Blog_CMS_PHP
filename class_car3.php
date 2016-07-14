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
$truck  = new Car(); 
echo $bmw->wheels . "<br>"; //call the method which assign value to a variable in an object

echo $truck->wheels = 10 . "<br>"; //a truck has another amount of wheels
$truck->CreateDoors(); //call a method
echo $truck->doors;  //display a value
?>