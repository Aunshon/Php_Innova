<?php
  require 'db.php';
  $id=$_GET['id'];

  $deleteQuery="DELETE FROM fonts WHERE id=$id";
  $deleteResult=mysqli_query($connectionQuery,$deleteQuery);
  if (!$deleteQuery) {
    echo "Cound not delete this Data";
    header("Refresh:2; URL=icon.php");
  }
  else {
    header("Location:icon.php");
  }
 ?>
