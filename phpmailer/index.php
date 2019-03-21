<?php
require_once('class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'marinanov040167@gmail.com';
$mail->Password = 'marinanov';
$mail->SMTPAuth = true;

$mail->From = 'marinanov040167@gmail.com';
$mail->FromName = 'Mohammad Masoudian';
$mail->AddAddress('nikitosnov@gmail.com');
$mail->AddReplyTo('nikitosnov@gmail.com', 'Information');

$mail->IsHTML(true);
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = "Hello";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}
?>
