<?php
 require 'desh_file/desh_header.php';

 require 'db.php';
 $roleMail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT * FROM fonts";
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
 // $alldataquery="SELECT * FROM inovalogo";
 // $alldataresult=mysqli_query($connectionQuery,$alldataquery);

 //$m=$_GET['msg'];
 // session_start();
 if ($_SESSION["activationica"]==1) {
   echo "<script type='text/javascript'>alert('Active a DeActived logo it will deactive automatically');</script>";
   $_SESSION["activationica"]=0;
 }
 ?>




<h1>All icons</h1>


<h3>facebook</h3>
 <table class="table mt-5 " id="table_id">
   <thead class="thead-dark">
     <tr>
       <th>Photo</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
   <?php
   foreach ($confirmQuery as $value) {
      if ($value["type"]=="facebook") {

    ?>
     <tr>
       <td><li><a href="#"><i class="<?php echo $value['pic'] ?>"></i></a></li></td>
       <td>
         <?php
            if ($value['status']==1) {
              // echo $value['status'];
              ?>
              <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
              <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>
              <?php
            }
            else {
              ?>
              <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-primary"></a>
              <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>

              <?php
            }
          ?>
       </td>
     </tr>
   <?php
    }
    }
    ?>
   </tbody>
 </table>





<h3>twitter</h3>
 <table class="table mt-5 " id="table_id">
   <thead class="thead-dark">
     <tr>
       <th>Photo</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
   <?php
   foreach ($confirmQuery as $value) {
      if ($value["type"]=="twitter") {

    ?>
     <tr>
       <td><li><a href="#"><i class="<?php echo $value['pic'] ?>"></i></a></li></td>
       <td>
         <?php
         if ($value['status']==1) {
           // echo $value['status'];
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>
           <?php
         }
         else {
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-primary"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>

           <?php
         }
          ?>
       </td>
     </tr>
   <?php
 }
    }
    ?>
   </tbody>
 </table>

<h3>google plus</h3>
 <table class="table mt-5 " id="table_id">
   <thead class="thead-dark">
     <tr>
       <th>Photo</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
   <?php
   foreach ($confirmQuery as $value) {
      if ($value["type"]=="googleplus") {

    ?>
     <tr>
       <td><li><a href="#"><i class="<?php echo $value['pic'] ?>"></i></a></li></td>
       <td>
         <?php
         if ($value['status']==1) {
           // echo $value['status'];
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>
           <?php
         }
         else {
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-primary"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>

           <?php
         }
          ?>
       </td>
     </tr>
   <?php
 }
    }
    ?>
   </tbody>
 </table>


<h3>youtube</h3>
 <table class="table mt-5 " id="table_id">
   <thead class="thead-dark">
     <tr>
       <th>Photo</th>
       <th>Status</th>
     </tr>
   </thead>
   <tbody>
   <?php
   foreach ($confirmQuery as $value) {
      if ($value["type"]=="youtube") {

    ?>
     <tr>
       <td><li><a href="#"><i class="<?php echo $value['pic'] ?>"></i></a></li></td>
       <td>
         <?php
         if ($value['status']==1) {
           // echo $value['status'];
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Activeted" class="btn btn-success"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>
           <?php
         }
         else {
           ?>
           <a href="ica.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="DeActived" class="btn btn-primary"></a>
           <a href="icadel.php?id=<?php echo $value['id']; ?>&status=<?php echo $value['status']; ?>&type=<?php echo $value['type']; ?>"><input type="submit" name="" value="Delete" class="btn btn-danger"></a>

           <?php
         }
          ?>
       </td>
     </tr>
   <?php
 }
    }
    ?>
   </tbody>
 </table>




<h1>Add new icon</h1>
<div>
  <form action="newicon.php" method="post">
    <div>
      <label for="">fontawesome icon</label>
      <input type="text" name="photo" placeholder="write fontawesome icon class" class="form-control">
      <label >Select icon type</label>
        <div class="row">
          <div class="col">
            <select class="form-control" id="exampleFormControlSelect1" name="type">
              <option value="facebook">facebook</option>
              <option value="twitter">twitter</option>
              <option value="googleplus">google plus</option>
              <option value="youtube">youtube</option>
            </select>
          </div>
        </div>
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
        <button type="submit" name="button" class="btn btn-primary form-control">Add</button>
    </div>

      <br><br><br><br>

  </form>
</div>







<?php
 require 'desh_file/desh_footer.php';
 ?>
