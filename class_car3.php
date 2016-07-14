<?php

class Car {
    function MoveWheels(){
            echo "Wheels move";
    }
}
$bmw = new Car(); //create object 
$merces_benz = new Car();

$bmw->MoveWheels(); // use method of the object
$merces_benz->MoveWheels();
?>