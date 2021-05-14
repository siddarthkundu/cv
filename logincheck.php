<?php
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql    = "SELECT * FROM register WHERE email = '$email'  AND password ='$password'";

$result = mysqli_query($conn,$sql);
$count  = mysqli_num_rows($result);

if($count == 1){

    header("location: home.html");
}
else{
    $error = "Your Username and password is incorrect";
    echo $error;
}
?>
