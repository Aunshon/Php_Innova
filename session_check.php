<?php
session_start();
$_SESSION['messageAlert']=0;
if ($_SESSION['check_login']==null) {
  header("location:login.php");
}
 ?>
