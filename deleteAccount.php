<?php
include ('config/db.php');

$link = pg_connect("host=$host
 port=$port
 dbname=$dbname
 user=$user
 password=$password")
	or die("Ошибка " . pg_last_error($link));
   $name = $_POST["name"];

	 $query ="DELETE FROM users WHERE name ='$name'";

	 $result = pg_query($link, $query) or die("Ошибка " . pg_last_error($link));
 	if($result)
 	{
    if (!is_dir("./users/$name")) {
        mkdir("./users/$name");
    }

    rmdir("./users/$name");
    session_start();
    // Unset все переменные сессии.
    session_unset();
    // Наконец, разрушить сессию.
    session_destroy();
 	  echo "ok";
 }

pg_close($link);
?>
