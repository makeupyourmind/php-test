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

        echo json_encode($name);

    }



 ?>
