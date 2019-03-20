<?php
  require_once 'connection.php';

  $code = $_POST['codeOne'];
  $confirm = $_POST['confirm'];

  if($confirm == $code){
    echo "ok";
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
     $name = $_POST["name"];
     $password = $_POST["password"];
     $email = $_POST["email"];

    $query ="INSERT INTO users VALUES(NULL,'$name','$password', '$email')";

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

    mysqli_close($link);
    $path = "./users/$name";
    mkdir($path, 0777, true);
 }
 else {
   echo "bad";
 }

?>
