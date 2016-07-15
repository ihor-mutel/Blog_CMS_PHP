<?php

class Car {
    public $wheels = 4; //it is available
    protected $hood = 1; //only available for this class or subclasses
    private $engine = 1; //only available for this class
    var $doors = 4;
    function ShowProperty(){
         echo $this->hood;
         echo $this->engine; // gives us engine
    }

}
class Semi extends Car {
    function ShowProperty(){
         echo $this->hood; // gives us hood
         //echo $this->engine; // gives us error because "protected" doesn't work in subclasses
    }
    
}
$bmw = new Car(); //make an object
$semi = new Semi(); //make an object

//echo $bmw->wheels; //gives us wheels
//echo $bmw->hood; //gives us error
//$bmw->ShowProperty();  //gives us hood

$bmw->ShowProperty(); //gives us hood and engine from class class Car
$semi->ShowProperty();  //gives us hood from class class subclass Semi

?>