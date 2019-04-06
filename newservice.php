<?php
  require 'db.php';
  $status=$_POST['one'];
  $des=$_POST['two'];
  $photo=$_FILES['photo'];
  //echo $photo['name'];
  $afterExplode=explode(".",$photo['name']);
  $extention=end($afterExplode);
  //echo $extention;

  //echo $photo['tmp_name'];
  if ($status==null) {
    $status="New Home Construction";
  }
  if ($des==null) {
    $des="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.";
  }
  $insertbanner="INSERT INTO service(header,discreption ) VALUES('$status','$des')";
  $confirmInsert=mysqli_query($connectionQuery,$insertbanner);
  $id=mysqli_insert_id($connectionQuery);
  $photoname=$id.'.'.$extention;
  $uploadphotolocation="service_pic/".$photoname;
  $currentPhotoLocation=$photo['tmp_name'];
  move_uploaded_file($currentPhotoLocation,$uploadphotolocation);

    $updatepic="UPDATE service SET photo='$photoname' WHERE id=$id";
    $confirmupdate=mysqli_query($connectionQuery,$updatepic);
    if (!$confirmupdate) {
      echo "Failed to upload photo";
      header("Refresh:1; URL=service.php");
    }
    else {
      header("location:service.php");
    }


 ?>
