<?php
  $hostname = "localhost:3308";
  $username = "root";
  $password = "";
  $dbname = "calgary";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
