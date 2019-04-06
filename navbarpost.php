<?php
 require 'desh_file/desh_header.php';
 require 'db.php';
 $one=$_POST['one'];
 $two=$_POST['two'];
 $three=$_POST['three'];
 $four=$_POST['four'];
 $five=$_POST['five'];
 if ($one==null) {
   $one="000-000-000";
 }
 if ($two==null) {
   $two="About";
 }
 if ($three==null) {
   $three="Services";
 }
 if ($four==null) {
   $four="Testimonials";
 }
 if ($five==null) {
   $five="Contact";
 }
 $update="UPDATE navbar SET phone='$one',one='$two',two='$three',three='$four',four='$five'";
 $query=mysqli_query($connectionQuery,$update);

 if (!$query) {
   echo "Failed to change navbar";
   header("refresh:1 ; URL=innovamenu.php");
 }
 else {
   Header("location:innovamenu.php");
 }
 ?>













<?php
 require 'desh_file/desh_footer.php';
 ?>
