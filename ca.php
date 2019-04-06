<?php
require 'db.php';

  $id=$_GET['id'];
  $status=$_GET['status'];

  if ($status==1) {
    //echo "<script type='text/javascript'>alert('Active a de activated logo then it wwill Deactive Automatically');</script>";
    //header("location:changelogo.php?msg=Active a de activated logo then it wwill Deactive Automatically");
    session_start();
    $_SESSION["activation"]=1;
    header("location:changelogo.php");
  }
  else {
    // $insertid=mysqli_insert_id($connectionQuery);
    // $uploadFileName=$insertid .".". $extension;
    // // echo $current_user_id;
    // $uploadFileName=$insertid .".". $extension;
    //  //echo "$uploadFileName";
    // $uploadFileLocation='logos/'.$uploadFileName;
    // move_uploaded_file($photoinfo['tmp_name'],$uploadFileLocation);
    // $uploadPhotoQuery="UPDATE logo SET photo='$uploadFileName' WHERE id=$insertid";
    // mysqli_query($connectionQuery,$uploadPhotoQuery);
    $u="UPDATE logo set status=0";
    $i=mysqli_query($connectionQuery,$u);
    $upload="UPDATE logo set status=1 WHERE id=$id";
    mysqli_query($connectionQuery,$upload);
    //header("Refresh:2;URL=login.php");
    header("location:changelogo.php");
  }

  // echo $id;
  // echo "<br>";
  // echo $status;

 ?>
