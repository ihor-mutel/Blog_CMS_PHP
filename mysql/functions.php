<?php include "db.php"; ?>
<?php

function showAllData () {
global $connection; //inside of function is a local scope in order to bring variables from global scope we should use this
$query = "SELECT * FROM users"; // * means all

$result = mysqli_query($connection, $query);

if(!$result){
   die('Query failed' . mysqli_error());       
}

while($row = mysqli_fetch_assoc($result)){  
$id = $row['id'];    
echo "<option value='$id'>$id</option>";
}
}

function updateTable(){
global $connection; //inside of function is a local scope in order to bring variables from global scope we should use this
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id "; //choose which row to update, id without quotes because it's an integer


$result = mysqli_query($connection, $query);

if(!$result){
   die('Query failed' . mysqli_error($connection));       
}
}

function deleteRows(){
global $connection; //inside of function is a local scope in order to bring variables from global scope we should use this
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id "; //choose which row to update, id without quotes because it's an integer


$result = mysqli_query($connection, $query);

if(!$result){
   die('Query failed' . mysqli_error($connection));       
}
}
?>