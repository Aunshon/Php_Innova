<?php
require 'db.php';
require 'session_check.php';

$name=$_POST['one'];
$id=$_POST['two'];

if ($name==null) {
  $name="Who We Are";
}
if ($id==null) {
  $id="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
}

$updateQuery="UPDATE aboutfirst SET header='$name' , details='$id'";
              //UPDATE contact SET name=[value-2],email=[value-3],message=[value-4] WHERE 1
$updateResult=mysqli_query($connectionQuery,$updateQuery);
if (!$updateQuery) {
  echo "Failed Update Information 😭";
  header("Refresh:2; URL=about.php");
}
else {
  header("Location:about.php");
}
 ?>
