<?php
  //script to connect to the databse
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $database = "elibrary";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>