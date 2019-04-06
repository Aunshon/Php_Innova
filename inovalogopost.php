<?php
  require 'db.php';
  $photoinfo=$_FILES['photo'];
  $status=$_POST['status'];

  $after_explode=explode(".",$photoinfo['name']);
  $extension=end($after_explode);
  $insert="INSERT INTO inovalogo(status) VALUES('$status')";
  $insertConfirm=mysqli_query($connectionQuery,$insert);
  if (!$insertConfirm) {
    echo "Failed to inseret data<br>";
  }
  else{
    if ($status==1) {
      $insertid=mysqli_insert_id($connectionQuery);
      $uploadFileName=$insertid .".". $extension;
      // echo $current_user_id;
      $uploadFileName=$insertid .".". $extension;
       //echo "$uploadFileName";
      $uploadFileLocation='uploads/inovalogo/'.$uploadFileName;
      move_uploaded_file($photoinfo['tmp_name'],$uploadFileLocation);
      $uploadPhotoQuery="UPDATE inovalogo SET photo='$uploadFileName' WHERE id=$insertid";
      mysqli_query($connectionQuery,$uploadPhotoQuery);
      $u="UPDATE inovalogo set status=0";
      $i=mysqli_query($connectionQuery,$u);
      $upload="UPDATE inovalogo set status=1 WHERE id=$insertid";
      mysqli_query($connectionQuery,$upload);
      //header("Refresh:2;URL=login.php");
      header("location:innovasettings.php");
    }
    else {
      $insertid=mysqli_insert_id($connectionQuery);
      $uploadFileName=$insertid .".". $extension;
      // echo $current_user_id;
      $uploadFileName=$insertid .".". $extension;
       //echo "$uploadFileName";
      $uploadFileLocation='uploads/inovalogo/'.$uploadFileName;
      move_uploaded_file($photoinfo['tmp_name'],$uploadFileLocation);
      $uploadPhotoQuery="UPDATE inovalogo SET photo='$uploadFileName' WHERE id=$insertid";
      mysqli_query($connectionQuery,$uploadPhotoQuery);
      //header("Refresh:2;URL=login.php");
      header("location:innovasettings.php");
    }

  }
 ?>
