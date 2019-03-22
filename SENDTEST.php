<?php
/*SendGrid Library*/
require_once ('SendGrid-API/vendor/autoload.php');

/*Content*/
$from = new SendGrid\Email("nikitosnov@gmail.com", "nikitosnov@gmail.com");
$subject = "SUBJECT";
$to = new SendGrid\Email("nikitosnov@gmail.com", "nikitosnov@gmail.com");
$content = new SendGrid\Content("text/html", "CONTENT_GOES_HERE");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
print $response->statusCode() . "\n";
?>
