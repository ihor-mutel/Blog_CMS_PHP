<?php
if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if ($connection) {
        echo "We are connected";        
    }else {
        die("Database connection failed");        
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6"> <!-- grid class -->
        <form action="login.php" method="post">
           
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div> 
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">        
        </form>
    </div>    
</div>    
</body>
</html>