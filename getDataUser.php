<?php
include ('config/db.php');

$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));
   $name = $_POST["name"];

	 $query ="SELECT name, password, email FROM users where name='$name'";

	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
 	if($result)
 	{
 	    $row = mysqli_fetch_row($result);
 	    if($row != ''){
 	      echo $row[0].' '.$row[1].' '.$row[2];
 	    }
      else {
        echo "not found";
      }
 }

mysqli_close($link);
?>
