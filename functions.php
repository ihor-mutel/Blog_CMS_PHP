<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

function init(){
    saySomething();
    echo "<br>";
    calculate();
}

function calculate(){
        echo 456 + 345;
    }
function saySomething(){
        echo "Hello student, do you like the class? okay great";
}
init()
?>
</body>
</html>