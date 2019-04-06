<?php
 require 'desh_file/desh_header.php';
 ?>
 <?php
 require 'db.php';
 $roleMail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT role FROM users_table WHERE email='$userEmail'";
 $confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
 $data=mysqli_fetch_array($confirmQuery);
 //echo $data['role'];
 if (isset($_GET['search'])) {
   $SearchedItem=$_GET['search'];
   $alldataquery="SELECT * FROM contact WHERE name LIKE '%$SearchedItem%'";
   $alldataresult=mysqli_query($connectionQuery,$alldataquery);
 }
 else {
   $alldataquery="SELECT * FROM contact";
   $alldataresult=mysqli_query($connectionQuery,$alldataquery);
 }

  ?>
<div class="row">
  <input type="text" name="" placeholder="Search Here" class="form-control col-lg-5" id="searchfild">
  <br><br>
  <button type="button" class="form-control btn btn-primary" id="searchbtn">Search</button>
</div>
 <br><br>
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Message</th>
         <th>Photo</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
     <?php
     foreach ($alldataresult as $value) {
      ?>
       <tr>
         <td><?php echo $value['id']; ?></td>
         <td><?php echo $value['name']; ?></td>
         <td><?php echo $value['email']; ?></td>
         <td><?php echo $value['message']; ?></td>
         <td><img src="uploads/<?php echo $value['photo']; ?>" alt=""width="50"></td>
         <td class="text-right">
            <?php
                if ($data['role']==3 || $data['role']==2 ||$data['role']==1) {
             ?>
             <a href="view.php?id=<?php echo $value['id']; ?>"><button type="submit" class="btn btn-primary">View</button></a>
           <?php } ?>
           <?php if ($data['role']==3 || $data['role']==2) { ?>
             <a href="update.php?id=<?php echo $value['id']; ?>&name=<?php echo $value['name']; ?>&email=<?php echo $value['email']; ?>&message=<?php echo $value['message']; ?>"><button type="submit" class="btn btn-success">Update</button></a>
           <?php } ?>
           <?php if ($data['role']==3) { ?>
             <a href="delete.php?id=<?php echo $value['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
           <?php } ?>
         </td>
       </tr>

     <?php
      }
      ?>
     </tbody>
   </table>

 <div class="container">
   <div class="row">
     <form action="contact_list.php"class="col-lg-2" method="post">
       <button type="submit" name="goback" class="btn btn-primary ">Go Back</button>
     </form>
     <a href="logout.php"><button type="submit" name="logout" class="btn btn-danger col-lg-2">Logout</button></a>
   </div>
   <?php
     if (isset($_POST['goback'])) {
       header("location:index.php");
     }
     // if (isset($_POST['logout'])) {
     //   unset($_SESSION['check_login']);
     //   //header("refresh:1; URL=contact_list.php");
     //   header("location:login.php");
     // }
    ?>
 </div>

<?php
 require 'desh_file/desh_footer.php';
 ?>
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script>
          $(function () {
            $('#searchbtn').click(function(){
              var searchText=$('#searchfild').val();
              var baseUrl=window.location.pathname;
              var searchUrl=baseUrl+"?search="+searchText;
              //alert(searchUrl);
              window.location.href=searchUrl;
            });
                $('#table_id').DataTable();
          });
        </script>
