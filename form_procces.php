<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = array("Edwin", "Student", "Petir", "Mohad", "Jane", "Tom");
$minimum = 5;
$maximum = 10;

    if(strlen($username) < $minimum){
        echo "Username has to be longer than 5";
        
    }
    if(strlen($username) > $maximum ){
        echo "Username can't be longer than 10";
        
    }
    
    if(!in_array($username, $name)){ //in_array built in PHP function
        echo "Sorry yu are not allowed";
    }else {
        echo "Welcome";
    }
}
?>
