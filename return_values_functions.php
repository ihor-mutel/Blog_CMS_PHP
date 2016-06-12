<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
function addNumbers($number1, $number2){
$sum = $number1 + $number2;
    return $sum;
}
$result = addNumbers(34,64); //assign what function return

echo $result; //show result (98)
echo "<br>";    

$result = addNumbers(100,$result); //reuse the same function

echo $result; //show result again (198)
    
?>
</body>
</html>