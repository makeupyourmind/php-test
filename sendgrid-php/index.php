<?php
//echo "hi";
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
 /*require("./sendgrid-php.php");
// If not using Composer, uncomment the above line
$email = new \SendGrid\Mail\Mail();
$email->setFrom("nikitosnov@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("nikitosnov@gmail.com", "Example User");
$email->addContent(
    "text/plain", "and easy to do anywhere, even with PHP"
);
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}*/
require 'vendor/autoload.php';
$sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
$email    = new SendGrid\Email();

$email->addTo("nikitosnov@gmail.com")
      ->setFrom("nikitosnov@gmail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);
echo "string";
?>
