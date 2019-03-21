<?php
	// You need to install the sendgrid client library so run: composer require sendgrid/sendgrid
	require './sendgrid-php/vendor/autoload.php';
	// contains a variable called: $API_KEY that is the API Key.
	// You need this API_KEY created on the Sendgrid website.
	include_once('./credentials.php');

	/*$FROM_EMAIL = 'nkitosnov@gmail.com';
	// they dont like when it comes from @gmail, prefers business emails
	$TO_EMAIL = 'nkitosnov@gmail.com';
	// Try to be nice. Take a look at the anti spam laws. In most cases, you must
	// have an unsubscribe. You also cannot be misleading.
	$subject = "YOUR_SUBJECT";
	$from = new SendGrid\Email(null, $FROM_EMAIL);
	$to = new SendGrid\Email(null, $TO_EMAIL);
	$htmlContent = 'HI';
	// Create Sendgrid content
	$content = new SendGrid\Content("text/html",$htmlContent);
	// Create a mail object
	$mail = new SendGrid\Mail($from, $subject, $to, $content);*/

  echo "hi";
	echo "ok";
	$key = getenv('SENDGRID_API_KEY');
	$sendgrid = new SendGrid($key);
$email = new SendGrid\Email();
$to = "nikitosnov@gmail.com";
$from = "nikitosnov@gmail.com";
$fromName = "Nikita";
$subject = "hello";
$html = "Hi";
$email
  ->addTo($to,$toName)
  ->setFrom($from)
  ->setFromName($fromName)
  ->setSubject($subject)
  ->setText('Hello World!')
  ->setHtml($html);
echo "ok";
try {
  $sendgrid->send($email);
	echo "sended";
} catch(\SendGrid\Exception $e) {
	echo "error";
}
	/*$sg = new \SendGrid($API_KEY);
	$response = $sg->client->mail()->send()->post($mail);

	if ($response->statusCode() == 202) {
		// Successfully sent
		echo 'done';
	} else {
		echo 'false';
	}*/
?>
