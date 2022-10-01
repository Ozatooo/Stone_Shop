<?php

if($_POST['check'] != "on")
{
    header("Location: ../Stone_Shop/main.html");
}

$mysqli = new mysqli("https://www.db4free.net/phpMyAdmin/","stone_shop","KKFk321123!","stone_shop");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM Stone_Data")) {
  echo "Returned rows are: " . $result -> num_rows;
  // Free result set
  $result -> free_result();
}

$mysqli -> close();


?>