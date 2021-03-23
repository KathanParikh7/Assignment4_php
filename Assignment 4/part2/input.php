<?php

include 'mysqli_oop_connect.php';

$username = $_POST["username"];
$message = $_POST["message"];

if(isset($username) && isset($message)){
  $query = "INSERT INTO messages VALUES ('$username','$message')";
  $result = mysqli_query($mysqli,$query);
}

?>
