<?php
include ('config/db.php'); // подключаем скрипт

$link = pg_connect($host, $user, $password, $database)
    or die("Ошибка " . pg_connect($link));
  $name = $_POST["name"];
$query ="SELECT name, password FROM users where name='$name'";

$result = pg_connect($link, $query) or die("Ошибка " . mysqli_error($link));

 session_start();
if($result)
{
    $row = mysqli_fetch_row($result);
    if($row != ''){
      $_SESSION['logged_user'] = $_POST['name'];

       echo $row[0].' '.$row[1];
       exit;

    }
    else {
      echo "not found";
    }

    mysqli_free_result($result);
}



mysqli_close($link);
?>
