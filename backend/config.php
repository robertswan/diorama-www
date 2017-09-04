<?php

  $host = "localhost";
  $db = "diorama";
  $user = "root";
  $pass = "";

  $conn = mysqli_connect($host, $user, $pass, $db);

  if(!$conn)
    die("Unable to connect to database");

?>
