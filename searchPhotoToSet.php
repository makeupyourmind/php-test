<?php
  session_start();

  $user = $_SESSION['logged_user'];

  $path = "./users/$user/";

  $find = scandir($path);

  unset($find[0]); // Delete known index(2) value from array
  unset($find[1]);

  $find= array_values($find);

  echo json_encode($find);
  

 ?>
