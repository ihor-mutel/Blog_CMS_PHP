<?php include "db.php";
include "functions.php";


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
        <form action="login_create.php" method="post">
           
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div> 
            <div class="form-group">
                <select name="" id="">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){  
                        $id = $row['id'];    
                        echo "<option value='$id'>$id</option>";
                        }
                    ?>
                   
                   
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">        
        </form>
    </div>      
</div>    
</body>
</html>