<?php
  //unset($_SESSION['check_login']);
  //header("refresh:1; URL=contact_list.php");
  session_start();
  session_destroy();
  //header("location:login.php");
   require 'session_check.php';
 ?>
