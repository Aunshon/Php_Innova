<?php
 require 'desh_file/desh_header.php';
 require 'db.php';
 $one=$_POST['address'];
 $two=$_POST['phone'];
 $three=$_POST['email'];
 if ($one==null) {
   $one="4321 California St,San Francisco, CA 12345";
 }
 if ($two==null) {
   $two="+1 123 456 1234";
 }
 if ($three==null) {
   $three="info@company.com";
 }
 $update="UPDATE m_contact SET address='$one',phone='$two',email='$three'";
 $query=mysqli_query($connectionQuery,$update);

 if (!$query) {
   echo "Failed to change navbar";
   header("refresh:1 ; URL=m_contact.php");
 }
 else {
   Header("location:m_contact.php");
 }
 ?>













<?php
 require 'desh_file/desh_footer.php';
 ?>
