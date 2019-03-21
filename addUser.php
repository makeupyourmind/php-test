<?php
include ('config/db.php');

$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));
   $name = $_POST["name"];
   $password = $_POST["password"];
   $email = $_POST["email"];

	 $query ="SELECT name FROM users where name='$name'";

	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
 	if($result)
 	{
 	    $row = mysqli_fetch_row($result);
 	    if($row != ''){
 	      echo "user is registered";
 	    }
 	    else {
 	      //echo "ok";
				$code = mt_rand(5, 100);
			   //echo $code;
			  $name = "";
			  $from = "";
			  $subject = "";
			  $message = "";
			  //$name = $_POST['name'];
			  $from = "marinanov040167@gmail.com";
			  $subject = "Confirm your Email";
			  $message = "Your verification code : $code";
			  $to = $_POST['email'];
			  $headers = "From: $from\r\nReply-to: $from";
			  mail($to, $subject, $message, $headers);
				echo $code;
				exit;
 	    }

 	}

mysqli_close($link);
?>
