<?php

class Car {
    static $wheels = 4;
    var $hood = 1;

    function MoveWheels(){
            Car::$wheels = 10;
    }
}
$bmw = new Car(); //make an object
//echo $bmw->wheels; //gives us error because we can't call static property from an instance
Car::MoveWheels(); //call any static data from the class use ::
echo Car::$wheels; //it's attached to a class not to an instance
    
?>