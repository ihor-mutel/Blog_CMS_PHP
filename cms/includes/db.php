<?php

$db['db_host'] = "localhost"; //add each parameter for connection to a database into an array
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value){ //go through an array $db
    //define("CONSTANT", "Hello world.");
    define(strtoupper($key),$value); //make each parameter in $db constant
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//if ($connection) {
//    echo "We are connected";
//}





?>