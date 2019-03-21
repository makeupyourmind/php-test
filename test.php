<?php
$name = "";
$from = "";
$subject = "";
$message = "";
//$name = $_POST['name'];
$from = "marinanov040167@gmail.com";
$subject = "Confirm your Email";
$message = "Your verification code : 5";
$to = "nikitosnov@gmail.com";
$headers = "From: nikitosnov@gmail.com\r\nReply-to: nikitosnov@gmail.com";
mail($to, $subject, $message, $headers);
echo "sended";
exit;

?>
