<?php

  include "config.php";

  $id = $_GET["id"];

  $result = mysqli_query($conn, "DELETE FROM updates WHERE id=$id");
  header("location: panel.php");

?>
