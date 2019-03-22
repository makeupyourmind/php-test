<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    /*$mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'marinanov040167@gmail.com';                     // SMTP username
    $mail->Password   = 'marinanov';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nikitosnov@gmail.com', 'Mailer');
    $mail->addAddress('nikitosnov@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('nikitosnov@gmail.com');               // Name is optional
    $mail->addReplyTo('nikitosnov@gmail.com', 'Information');
    $mail->addCC('nikitosnov@gmail.com');
    $mail->addBCC('nikitosnov@gmail.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/
    $mail->IsSMTP(); // telling the class to use SMTP
    //$mail->Host       = "smtp.gmail.com"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                               // 1 = errors and messages
                                               // 2 = messages only
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "marinanov040167@gmail.com";  // GMAIL username
    $mail->Password   = "marinanov";

    $mail->setFrom('nikitosnov@gmail.com', 'Mailer');
    $mail->addAddress('nikitosnov@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('nikitosnov@gmail.com');               // Name is optional
    $mail->addReplyTo('nikitosnov@gmail.com', 'Information');
    $mail->addCC('nikitosnov@gmail.com');
    $mail->addBCC('nikitosnov@gmail.com');

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
