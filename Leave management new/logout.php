<?php
   #session_start();
  # unset($_SESSION["username"]);
   #unset($_SESSION["password"]);

   #echo 'You have cleaned session';
   #header('Refresh: 1; URL = login.php');

   session_start();
session_destroy();
#$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
header('Location: login.php ' );
?>
