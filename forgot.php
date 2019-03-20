<?php
require_once 'connection.php';

$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));
   $email = $_POST["email"];

	 $query ="SELECT email, password FROM users where email='$email'";

	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
 	if($result)
 	{
 	    $row = mysqli_fetch_row($result);
 	    if($row != ''){
        echo $row[0];
        $name = "";
        $from = "";
        $subject = "";
        $message = "";
        $name = $_POST['name'];
        $from = 'marinanov040167@gmail.com';
        $subject = "Forgot password";
        $message = "Your password is : $row[1]";
        $to = $_POST['email'];
        $headers = "From: $from\r\nReply-to: $from";
        mail($to, $subject, $message, $headers);
        echo "ok";
        exit;
 	    }
 	    else {
 	      echo "error";
 	    }

 	}

mysqli_close($link);
?>
