<?php
include ('config/db.php');

$link = pg_connect("host=$host
 port=$port
 dbname=$dbname
 user=$user
 password=$password")
	or die("Ошибка " . pg_last_error($link));
   $email = $_POST["email"];

	 $query ="SELECT email, password FROM users where email='$email'";

	 $result = pg_query($link, $query) or die("Ошибка " . pg_last_error($link));
 	if($result)
 	{
 	    $row = pg_fetch_row($result);
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

pg_close($link);
?>
