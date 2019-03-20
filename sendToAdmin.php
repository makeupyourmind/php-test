<?php
//ini_set('SMTP','myserver');
//ini_set('smtp_port',25);
  $name = "";
  $from = "";
  $subject = "";
  $message = "";
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = 'nikitosnov@gmail.com';
  $headers = "From: $from\r\nReply-to: $from";
  mail($to, $subject, $message, $headers);
  echo "ok";
  exit;
?>
