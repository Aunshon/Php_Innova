<?php
 require 'desh_file/desh_header.php';

 require 'db.php';
 $roleMail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT * FROM banner_pic";
 $confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
 $data=mysqli_fetch_array($confirmQuery);
 //echo $data['role'];
 // if (isset($_GET['search'])) {
 //   $SearchedItem=$_GET['search'];
 //   $alldataquery="SELECT * FROM contact WHERE name LIKE '%$SearchedItem%'";
 //   $alldataresult=mysqli_query($connectionQuery,$alldataquery);
 // }
 // else {
 //   $alldataquery="SELECT * FROM contact";
 //   $alldataresult=mysqli_query($connectionQuery,$alldataquery);
 // }
 $alldataquery="SELECT * FROM banner_pic";
 $alldataresult=mysqli_query($connectionQuery,$alldataquery);


 //$m=$_GET['msg'];
 // session_start();
 if ($_SESSION["activationbanner"]==1) {
   echo "<script type='text/javascript'>alert('Active a DeActived logo it will deactive automatically');</script>";
   $_SESSION["activationbanner"]=0;
 }

 $bannerdata="SELECT * FROM banner_titles";
 $bannerresult=mysqli_query($connectionQuery,$bannerdata);
 $bd=mysqli_fetch_assoc($bannerresult);
 ?>




<h1>All banner images</h1>

 <table class="table mt-5 " id="table_id">
   <thead class="thead-dark">
     <tr>
       <th>ID</th>
       <th>Photo</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
   <!-- <?php
   foreach ($alldataresult as $value) {
    ?> -->
     <tr>
       <td><?php echo $value['id']; ?></td>
       <td><img src="banner_pic/<?php echo $value['photo']; ?>" alt=""width="100"></td>
       <td>
         <?php
            if ($value['status']==1) {
              // echo $value['status'];
              ?>
              <a href="banner_pic_ch.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
              <a href="bannerremove.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="Remove" class="btn btn-primary"></a>
              <?php
            }
            else {
              ?>
              <a href="banner_pic_ch.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-danger"></a>
              <a href="bannerremove.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="Remove" class="btn btn-primary"></a>

              <?php
            }
          ?>
       </td>
     </tr>

   <!-- <?php
    }
    ?> -->

   </tbody>
 </table>




 <h1>Change banner titles</h1>
 <form action="bannerdatapost.php" method="post">
   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>main title</th>
         <th>main ditels</th>
         <th>Banner middle button</th>
         <th>banner lower title</th>
         <th>lower ditels</th>
         <th>banner lower button</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td> <input type="text" name="one" placeholder="Change <?php echo $bd['one'] ?>" > </td>
         <td> <input type="text" name="tow" placeholder="Change <?php echo $bd['two'] ?>" > </td>
         <td> <input type="text" name="three" placeholder="Change <?php echo $bd['three'] ?>" > </td>
         <td> <input type="text" name="four" placeholder="Change <?php echo $bd['four'] ?>" > </td>
         <td> <input type="text" name="five" placeholder="Change <?php echo $bd['five'] ?>" > </td>
         <td> <input type="text" name="six" placeholder="Change <?php echo $bd['six'] ?>" > </td>
       </tr>
     </tbody>
   </table>
   <button type="submit" name="button" class="btn btn-success form-control">Change NavBar</button>
 </form>






<h1>Add new Banner image</h1>
<div>
  <form action="new_banner.php" method="post" enctype="multipart/form-data">
    <div class="form-control">
      <input type="file" name="photo" value="">
      <br>
      <label >Select action type</label>
        <div class="row">
          <div class="col">
            <select class="form-control" id="exampleFormControlSelect1" name="status">
              <option value="0">Deactive</option>
              <option value="1">Active</option>
            </select>
          </div>
        </div>
        <br>
        <button type="submit" name="button" class="btn btn-primary form-control">Add</button>
    </div>
  </form>
</div>









<?php
 require 'desh_file/desh_footer.php';
 ?>
