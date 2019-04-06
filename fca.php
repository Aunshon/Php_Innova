<?php
 require 'desh_file/desh_header.php';
 require 'db.php';
 $one=$_POST['copy'];
 $two=$_POST['link'];
 $three=$_POST['name'];
 if ($one==null) {
   $one="2017 INNOVA. Design by";
 }
 if ($two==null) {
   $two="http://www.templatewire.com";
 }
 if ($three==null) {
   $three="TemplateWire";
 }
 $update="UPDATE footer SET copy='$one',link='$two',name='$three'";
 $query=mysqli_query($connectionQuery,$update);

 if (!$query) {
   echo "Failed to change navbar";
   header("refresh:1 ; URL=footerch.php");
 }
 else {
   Header("location:footerch.php");
 }
 ?>













<?php
 require 'desh_file/desh_footer.php';
 ?>
