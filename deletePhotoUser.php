<?php

   session_start();
   $user = $_SESSION['logged_user'];

   $namePhoto = $_POST["temp"];

   $filename = "./users/$user/$namePhoto";

   if (file_exists($filename)) {
    unlink("./users/$user/$namePhoto");
    //echo "photo deleted";

    $user = $_SESSION['logged_user'];

    $path = "./users/$user/";

    $find = scandir($path);

    unset($find[0]); // Delete known index(2) value from array
    unset($find[1]);

    $find= array_values($find);

    echo json_encode($find);

   } else {
    echo "file does not exist";
  }





?>
