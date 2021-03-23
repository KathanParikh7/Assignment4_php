<?php

include 'mysqli_oop_connect.php';

$sql="SELECT * FROM messages";
$result = mysqli_query($mysqli,$sql);

while($row = mysqli_fetch_array($result)) {
  echo $row['username'] . " " . $row['message'] . "<br/>";  
}

?>
