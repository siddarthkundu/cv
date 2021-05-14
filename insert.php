<?php
require_once 'connect.php';
$sl_no = $_POST['sl_no'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO register (sl_no,name,email,password)
  VALUES(DEFAULT,'$name','$email','$password')";
$query = mysqli_query($conn,$sql);
if(!$query){
    echo"Error in inserting value...Please try again !";
    }
      else {
        header("Location: index.html");
      }
 ?>
