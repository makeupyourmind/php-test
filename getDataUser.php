<?php
include ('config/db.php');

$link = pg_connect("host=$host
 port=$port
 dbname=$dbname
 user=$user
 password=$password")
	or die("Ошибка " . pg_last_error($link));
   $name = $_POST["name"];

	 $query ="SELECT name, password, email FROM users where name='$name'";

	 $result = pg_query($link, $query) or die("Ошибка " . pg_last_error($link));
 	if($result)
 	{
 	    $row = pg_fetch_row($result);
 	    if($row != ''){
 	      echo $row[0].' '.$row[1].' '.$row[2];
 	    }
      else {
        echo "not found";
      }
 }

pg_close($link);
?>
