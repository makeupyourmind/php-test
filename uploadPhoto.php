<?php
  session_start();

  if (isset($_FILES["pic"]["name"])) {

     $user = $_SESSION['logged_user'];
     $name = $_FILES["pic"]["name"];
     $tmp_name = $_FILES['pic']['tmp_name'];
     $error = $_FILES['pic']['error'];

    $location = "users/$user/";
    $locationAva = "users/$user/avatar/";
        move_uploaded_file($tmp_name, $location.$name);
        //move_uploaded_file($tmp_name, $locationAva.$name);
        echo json_encode($name);
        //$x  = array (1, 'string', true);
        //echo json_encode($x);
    }
//echo json_encode($_POST['DeletePhoto']);
      //echo $error;

    /*  if($_SESSION['logged_user'] && isset($_FILES["pic"]["name"]) )
      {
      $user = $_SESSION['logged_user'];

      $path = "./users/$user/";

      $find = scandir($path);

      unset($find[0]); // Delete known index(2) value from array
      unset($find[1]);

      $find= array_values($find);

      echo json_encode($find);
    }*/


//echo isset($_FILES["pic"]["name"]);
//profit
  /*$user = $_SESSION['logged_user'];

  $path = "./users/$user/";

  $find = scandir($path);

  unset($find[0]); // Delete known index(2) value from array
  unset($find[1]);

  $find= array_values($find);

  echo json_encode($find);*/


 ?>
