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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">    
</form>
</body>
</html>