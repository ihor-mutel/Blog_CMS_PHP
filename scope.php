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

$x = "inside";  //local

}

echo $x; //gives us "outside"
echo "<br>";
    
convert(); //trying to convert 
echo $x; //but still gives us "outside"

?>
</body>
</html>