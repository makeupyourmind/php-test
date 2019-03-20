<?php
require_once 'connection.php'; // подключаем скрипт

$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
  $name = $_POST["name"];
$query ="SELECT name, password FROM users where name='$name'";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

 session_start();
if($result)
{
    $row = mysqli_fetch_row($result);
    if($row != ''){
      $_SESSION['logged_user'] = $_POST['name'];
      //header("Location: homePage.php");
      //while ($row = mysqli_fetch_row($result)) {
       echo $row[0].' '.$row[1];
       exit;
      //}
      //echo $row[0];
    }
    else {
      echo "not found";
    }

    mysqli_free_result($result);
}



mysqli_close($link);
?>
