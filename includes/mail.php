<?php
  $to      = 'enquiries@diorama.game';
  $subject = '';
  $message = $_POST['message'];
  $headers = 'From: ' . $_POST['fname'] . '(' . $_POST['email'] . ')';

  mail($to, $subject, $message, $headers);
?>
