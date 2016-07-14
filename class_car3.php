<?php

class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function MoveWheels(){
            echo "Wheels move";
    }
}
$bmw = new Car(); //make an object
$bmw->wheels = 8; //assing a value
echo $bmw->wheels;
?>