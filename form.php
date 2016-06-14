<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$minimum = 5;
$maximum = 10;

    if(strlen($username) < $minimum){
        echo "Username has to be longer than 5";
        
    }
    if(strlen($username) > $maximum ){
        echo "Username can't be longer than 10";
        
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