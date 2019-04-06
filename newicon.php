<?php
  require 'db.php';
  $status=$_POST['status'];
  $photo=$_POST['photo'];
  $type=$_POST['type'];

//echo $status . $photo . $type;

  $insertbanner="INSERT INTO fonts (pic,type,status) VALUES('$photo','$type',$status)";
  $confirmInsert=mysqli_query($connectionQuery,$insertbanner);
  $id=mysqli_insert_id($connectionQuery);

// if ($confirmInsert) {
//   echo "failed";
// }
// else {
//       header("location:icon.php");
// }
  if ($status==1) {
    $u="UPDATE fonts SET status=0 where type='$type'";
    $c=mysqli_query($connectionQuery,$u);

    $ua="UPDATE fonts SET status=1 WHERE id=$id";
    $ca=mysqli_query($connectionQuery,$ua);
    header("location:icon.php");
  }
  // else {
  //   $updatepic="UPDATE icon SET photo='$photoname' WHERE id=$id";
  //   $confirmupdate=mysqli_query($connectionQuery,$updatepic);
  //   if (!$confirmupdate) {
  //     echo "Failed to upload photo";
  //     header("Refresh:1; URL=innovabanner.php");
  //   }
  //   else {
  //     header("location:innovabanner.php");
  //   }
  // }
    header("location:icon.php");
 ?>
