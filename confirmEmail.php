<?php
  include ('config/db.php');

  $code = $_POST['codeOne'];
  $confirm = $_POST['confirm'];

  if($confirm == $code){
    echo "ok";
    $link = pg_connect("host=$host
     port=$port
     dbname=$dbname
     user=$user
     password=$password") or die("Ошибка " . pg_last_error($link));
     $name = $_POST["name"];
     $password = $_POST["password"];
     $email = $_POST["email"];

    $query ="INSERT INTO users(name,password,email) VALUES('$name','$password', '$email')";

    $result = pg_query($link, $query) or die("Ошибка " . pg_last_error($link));

    pg_close($link);
    $path = "./users/$name";
    mkdir($path, 0777, true);
 }
 else {
   echo "bad";
 }

?>
