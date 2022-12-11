<?php
$localhost="localhost";
$username = "root";
$password ="";
$db = "stock";


$conn = new mysqli($localhost,$username,$password,$db);
if($conn->error){
  die('error de connection');
}

 ?>
