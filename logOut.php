<?php
//unset($_SESSION['logged_user']);
//session_destroy();
session_start();
// Unset все переменные сессии.
session_unset();
// Наконец, разрушить сессию.
session_destroy();
header("Location: index.php");
?>
