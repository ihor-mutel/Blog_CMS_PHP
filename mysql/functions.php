<?php include "db.php"; ?>
<?php

function showAllData() {
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

function deleteRows(){
global $connection; //inside of function is a local scope in order to bring variables from global scope we should use this
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "DELETE FROM users ";
$query .= "WHERE id = $id "; //choose which row to update, id without quotes because it's an integer


$result = mysqli_query($connection, $query);

if(!$result){
   die('Query failed' . mysqli_error($connection));       
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

function createRows() {
global $connection; //inside of function is a local scope in order to bring variables from global scope we should use this
if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die("Database connection failed");        
    }
    
    $query = "INSERT INTO users(username,password) "; // username and password column 
    $query .= "VALUES ('$username', '$password') ";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
       die('Query failed' . mysqli_error());       
    }else {
        echo "Record created";
        
    }
}
}
?>