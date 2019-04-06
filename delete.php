<?php
  require 'db.php';
  require 'session_check.php';

  $id=$_GET['id'];
  $select_photo="SELECT photo FROM contact WHERE id=$id";
  $currentPhotoQuery=mysqli_query($connectionQuery,$select_photo);
  $currentPhot=mysqli_fetch_assoc($currentPhotoQuery);
  echo $currentPhot['photo'];
  $photoDeleteLocation="uploads/".$currentPhot['photo'];
  unlink($photoDeleteLocation);


  $deleteQuery="DELETE FROM contact WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=contact_list.php");
  }
  else {
    header("Location:contact_list.php");
  }
 ?>
