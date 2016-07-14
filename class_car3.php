<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels(){
            $this->wheels = 10;
    }
}
$bmw = new Car(); //make an object
$bmw->MoveWheels(); //call a method
//$bmw->wheels = 8; //assing a value
echo $bmw->wheels; //call the method which assign value to a variable in an object
?>