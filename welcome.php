<?php
$email = $_POST['email'];
$password = $_POST['password'];

if($email == "noor@gmail.com" && $password == "12345"){
    include("calculator.php");
}
else{
    echo "Error Login";
}
?>
