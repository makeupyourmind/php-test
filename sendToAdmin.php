<?php

  require_once ('SendGrid-API/vendor/autoload.php');
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = 'nikitosnov@gmail.com';
  $message = $_POST['message'];
  /*Content*/
  $from = new SendGrid\Email($name,$from);
  $subject = "SUBJECT";
  $to = new SendGrid\Email("nikita", "nikitosnov@gmail.com");
  $content = new SendGrid\Content("text/html", $message);

  /*Send the mail*/
  $mail = new SendGrid\Mail($from, $subject, $to, $content);
  $apiKey = getenv('SENDGRID_API_KEY');
  $sg = new \SendGrid($apiKey);

  /*Response*/
  $response = $sg->client->mail()->send()->post($mail);
  echo "ok";
?>
