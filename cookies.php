<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7); //expire in a week
setcookie($name,$value,$expiration);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>