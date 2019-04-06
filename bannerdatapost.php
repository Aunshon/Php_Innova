<?php
    require 'db.php';
    $one=$_POST['one'];
    $tow=$_POST['tow'];
    $three=$_POST['three'];
    $four=$_POST['four'];
    $five=$_POST['five'];
    $six=$_POST['six'];
    if ($one==null) {
      $one="Home Construction & Remodeling ";
    }
    if ($tow==null) {
      $tow=" 	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. 	";
    }
    if ($three==null) {
      $three="Learn More ";
    }
    if ($four==null) {
      $four="Cost for your home renovation project  	Get started today and complete our form to request your free estimate ";
    }
    if ($five==null) {
      $five=" 	Get started today and complete our form to request your free estimate ";
    }
    if ($six==null) {
      $six=" 	Free Estimate ";
    }

    echo $one . $tow . $three . $four . $five . $six ;
    $select="UPDATE banner_titles SET one='$one',two='$tow',three='$three',four='$four',five='$five',six='$six'";
    $q=mysqli_query($connectionQuery,$select);
    if (!$q) {
      echo "banner not updated";
      header("Refresh:2; URL=innovabanner.php");
    }
    else {
      header("location:innovabanner.php");
    }

 ?>
