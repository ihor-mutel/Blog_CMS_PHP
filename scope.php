<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$x = "outside"; //global

function convert(){
global $x; //declare varible global
$x = "inside";  //local

}

echo $x; //gives us "outside"
echo "<br>";
    
convert(); //trying to convert 
echo $x; //and then gives us "inside"

?>
</body>
</html>