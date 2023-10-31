<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$value = $_POST['calc'];

if($value == "Summation"){
    $x = ($num1 + $num2);
    echo "The Ans Is: $x";
}
if($value == "Subtraction"){
    $y = ($num1 - $num2);
    echo "The Ans Is: $y";
}

?>