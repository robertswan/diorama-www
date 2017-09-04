<?php
  include "config.php";

  $username = $_POST["username"];
  $password = $_POST["password"];

  //Help Protect Agaisnt SQL Injection
  $username = stripslashes($username);
  $password = stripslashes($password);

  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);

  //Password Hashing
  $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
  $newPass = password_verify($password, $hashedPassword);

  $sql = "SELECT * FROM members WHERE username = '$username' AND password = '$newPass'";

  if(mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION['user'] = $username;
    header("Location: panel.php");
  }
  else {
    echo "Wrong Username or Password Combination";
  }

  mysqli_close($conn);
?>
