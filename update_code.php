<?php
require 'db.php';
require 'session_check.php';

$name=$_POST['fname'];
$id=$_POST['id'];
$email=$_POST['email'];
$message=$_POST['message'];
$photo=$_FILES['updatephoto'];

if ($photo['name']==null) {
  $updateQuery="UPDATE contact SET name='$name' , email='$email' , message='$message' WHERE id='$id'";
                //UPDATE contact SET name=[value-2],email=[value-3],message=[value-4] WHERE 1
  $updateResult=mysqli_query($connectionQuery,$updateQuery);
  if (!$updateQuery) {
    echo "Failed Update Information 😭";
    header("Refresh:2; URL=update.php");
  }
  else {
    header("Location:contact_list.php");
  }
}
else {
  //print_r($photo);
  //echo $photo['type'];
  $getPhotoQuery="SELECT photo FROM contact where id=$id";
  $getPhotoResult=mysqli_query($connectionQuery,$getPhotoQuery);
  $getPhoto=mysqli_fetch_assoc($getPhotoResult);

  $afterExplodedPhotoName=explode('.',$photo['name']);
  //print_r($afterExplodedPhotoName);
  $extention=end($afterExplodedPhotoName);
  //echo $extention;
  $phoroName=$id.".".$extention;
  $photoLocation='uploads/'.$phoroName;
  unlink('uploads/'.$getPhoto['photo']);
  move_uploaded_file($photo['tmp_name'],$photoLocation);

  $updateQuery="UPDATE contact SET name='$name' , email='$email' , message='$message' WHERE id='$id'";
                //UPDATE contact SET name=[value-2],email=[value-3],message=[value-4] WHERE 1
  $updateResult=mysqli_query($connectionQuery,$updateQuery);
  if (!$updateQuery) {
    echo "Failed Update Information 😭";
    header("Refresh:2; URL=update.php");
  }
  else {
    header("Location:contact_list.php");
  }
}

 ?>
