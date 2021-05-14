<?php
$hostname="localhost";
$username="root";
$password="";
$database="learning_db";
$conn = mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
  die("could not connect database...");
}
 ?>
