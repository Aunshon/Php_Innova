<?php
  require 'db.php';
  $id=$_GET['id'];
  $status=$_GET['status'];

  if ($status==1) {
    session_start();
    $_SESSION["activationbanner"]=1;
    header("location:innovabanner.php");
  }
  else {
    $statusQueryall="UPDATE banner_pic SET status=0";
    $confirmStatusall=mysqli_query($connectionQuery,$statusQueryall);

    $statusQuery="UPDATE banner_pic SET status=1 WHERE id=$id";
    $confirmStatus=mysqli_query($connectionQuery,$statusQuery);
    header("location:innovabanner.php");
    // if ($confirmQuery) {
    //   echo "Failed to Active Banner";
    //   header("Refresh:1; URL=innovabanner.php");
    // }
    // else {
    //   header("location:innovabanner.php");
    // }
  }
 ?>
