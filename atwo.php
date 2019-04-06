<?php
require 'db.php';
require 'session_check.php';

$one=$_POST['one'];
$two=$_POST['two'];
$three=$_POST['three'];
$four=$_POST['four'];
$five=$_POST['five'];

if ($one==null) {
  $one="Why Choose Us?";
}
if ($two==null) {
  $two="Years of Experience";
}
if ($three==null) {
  $three="Fully Insured";
}
if ($four==null) {
  $four="Cost Control Experts";
}
if ($five==null) {
  $five="100% Satisfaction Guarantee";
}

$updateQuery="UPDATE aboutsecond SET header='$one',onr='$two',two='$three',three='$four',four='$five'";
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
