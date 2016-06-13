<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$list = [343,34,323,23,54,232,453];

echo max($list); //gives us max value in array (253)
echo "<br>";

echo min($list); //gives us min value in array (23)
echo "<br>";

print_r($list); //print the whole array
echo "<br>";

sort($list); //sort values

?>
</body>
</html>