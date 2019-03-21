<?php
include ('config/db.php'); // подключаем скрипт

$link = pg_connect("host=ec2-23-23-195-205.compute-1.amazonaws.com
 port=5432
 dbname=dbsfrnrnit83ug
 user=rhkqakswlapxxs
 password=7e55e5088ba4df938f3fa4b5d1452e0eb7b5947c5e1f59a41c2038759481276b")
    or die("connection failed соединения с базой " . pg_connect($link));
  $name = $_POST["name"];
$query ="SELECT name, password FROM users where name='$name'";

$result = pg_connect($link, $query) or die("Ошибка failed " . pg_connect($link));

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
