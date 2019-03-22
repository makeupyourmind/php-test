<?php
include ('config/db.php');

$link = pg_connect("host=$host
 port=$port
 dbname=$dbname
 user=$user
 password=$password")
	or die("Ошибка " . pg_last_error($link));
   $name = $_POST["name"];
   $password = $_POST["password"];
   $email = $_POST["email"];

	 $query ="SELECT name FROM users where name='$name'";

	 $result = pg_query($link, $query) or die("Ошибка " . pg_last_error($link));
 	if($result)
 	{
 	    $row = pg_fetch_row($result);
 	    if($row != ''){
 	      echo "user is registered";
 	    }
 	    else {
 	      //echo "ok";
				$code = mt_rand(5, 100);
				require_once ('SendGrid-API/vendor/autoload.php');
			  $name = $_POST['name'];
			  $from = "marinanov040167@gmail.com";
			  $subject = $_POST['subject'];
			  $message = $_POST['message'];
			  $to = $_POST['email'];
			  $message = "Your verification code : $code";
			  /*Content*/
			  $from = new SendGrid\Email($name,$from);
			  $subject = "SUBJECT";
			  $to = new SendGrid\Email("", $to);
			  $content = new SendGrid\Content("text/html", $message);

			  /*Send the mail*/
			  $mail = new SendGrid\Mail($from, $subject, $to, $content);
			  $apiKey = getenv('SENDGRID_API_KEY');
			  $sg = new \SendGrid($apiKey);

			  /*Response*/
			  $response = $sg->client->mail()->send()->post($mail);
				echo $code;
 	    }

 	}

pg_close($link);
?>
