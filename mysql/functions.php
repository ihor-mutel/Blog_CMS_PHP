<?php
$query = "SELECT * FROM users"; // * means all

$result = mysqli_query($connection, $query);

if(!$result){
   die('Query failed' . mysqli_error());       
}
?>