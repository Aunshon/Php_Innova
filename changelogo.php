<?php
 require 'desh_file/desh_header.php';

 require 'db.php';
 $roleMail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT * FROM logo";
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
 $alldataquery="SELECT * FROM logo";
 $alldataresult=mysqli_query($connectionQuery,$alldataquery);

 //$m=$_GET['msg'];
 // session_start();
 if ($_SESSION["activation"]==1) {
   echo "<script type='text/javascript'>alert('Active a DeActived logo it will deactive automatically');</script>";
   $_SESSION["activation"]=0;
 }
 ?>






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
       <td><img src="logos/<?php echo $value['photo']; ?>" alt=""width="100"></td>
       <td>
         <?php
            if ($value['status']==1) {
              // echo $value['status'];
              ?>
              <a href="ca.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
              <?php
            }
            else {
              ?>
              <a href="ca.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-danger"></a>

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
<h1>Add New Logo</h1>
<div>
  <form action="logopost.php" method="post" enctype="multipart/form-data">
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

      <br><br><br><br>

  </form>
</div>







<?php
 require 'desh_file/desh_footer.php';
 ?>
