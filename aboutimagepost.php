<?php
require 'db.php';
$photo=$_FILES['updatephoto'];
$getPhotoQuery="SELECT photo FROM aboutimage ";
$getPhotoResult=mysqli_query($connectionQuery,$getPhotoQuery);
$getPhoto=mysqli_fetch_assoc($getPhotoResult);

$afterExplodedPhotoName=explode('.',$photo['name']);
//print_r($afterExplodedPhotoName);
$extention=end($afterExplodedPhotoName);
//echo $extention;
$phoroName="about".".".$extention;
$photoLocation='uploads/'.$phoroName;
unlink('uploads/'.$getPhoto['photo']);
move_uploaded_file($photo['tmp_name'],$photoLocation);

    $ii="DELETE FROM aboutimage WHERE 1";
    $qi=mysqli_query($connectionQuery,$ii);

    $i="INSERT INTO aboutimage(photo) VALUES('$phoroName')";
    $q=mysqli_query($connectionQuery,$i);

    header("location:about.php");
 ?>
