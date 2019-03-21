<?php
include ('config/db.php'); // подключаем скрипт

$link = pg_connect("host=$host
 port=$port
 dbname=$dbname
 user=$user
 password=$password")
    or die("connection failed соединения с базой " . pg_last_error($link));
  $name = $_POST["name"];
$query ="SELECT name, password FROM users where name='$name'";

$result = pg_query($link, $query) or die("Ошибка failed " . pg_last_error($link));

 session_start();
if($result)
{
    $row = pg_fetch_row($result);
    if($row != ''){
      $_SESSION['logged_user'] = $_POST['name'];

       echo $row[0].' '.$row[1];
       exit;

    }
    else {
      echo "not found";
    }

    pg_free_result($result);
}



pg_close($link);
?>
