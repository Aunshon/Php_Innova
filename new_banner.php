<?php
  require 'db.php';
  $status=$_POST['status'];
  $photo=$_FILES['photo'];
  //echo $photo['name'];
  $afterExplode=explode(".",$photo['name']);
  $extention=end($afterExplode);
  //echo $extention;

  //echo $photo['tmp_name'];
  $insertbanner="INSERT INTO banner_pic(status) VALUES($status)";
  $confirmInsert=mysqli_query($connectionQuery,$insertbanner);
  $id=mysqli_insert_id($connectionQuery);
  $photoname=$id.'.'.$extention;
  $uploadphotolocation="banner_pic/".$photoname;
  $currentPhotoLocation=$photo['tmp_name'];
  move_uploaded_file($currentPhotoLocation,$uploadphotolocation);

  if ($status==1) {
    $u="UPDATE banner_pic SET status=0";
    $c=mysqli_query($connectionQuery,$u);

    $updatepic="UPDATE banner_pic SET photo='$photoname' WHERE id=$id";
    $confirmupdate=mysqli_query($connectionQuery,$updatepic);

    $ua="UPDATE banner_pic SET status=1 WHERE id=$id";
    $ca=mysqli_query($connectionQuery,$ua);
    header("location:innovabanner.php");
  }
  else {
    $updatepic="UPDATE banner_pic SET photo='$photoname' WHERE id=$id";
    $confirmupdate=mysqli_query($connectionQuery,$updatepic);
    if (!$confirmupdate) {
      echo "Failed to upload photo";
      header("Refresh:1; URL=innovabanner.php");
    }
    else {
      header("location:innovabanner.php");
    }
  }

 ?>
