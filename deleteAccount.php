<?php
include ('config/db.php');

$link = mysqli_connect($host, $user, $password, $database)
	or die("Ошибка " . mysqli_error($link));
   $name = $_POST["name"];

	 $query ="DELETE FROM users WHERE name ='$name'";

	 $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
 	if($result)
 	{
    if (!is_dir("./users/$name")) {
        mkdir("./users/$name");
    }

    rmdir("./users/$name");

 	  echo "ok";
 }

mysqli_close($link);
?>
