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

?>