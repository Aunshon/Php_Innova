<?php
 require 'desh_file/desh_header.php';
 $viewUserId = $_GET['id'];
 $viewSelect="SELECT * FROM CONTACT WHERE id=$viewUserId";
 $viewQuery=mysqli_query($connectionQuery,$viewSelect);
 $viewAssoc=mysqli_fetch_assoc($viewQuery);
 ?>
 <div class="text-center py-4">
   <h2>Details</h2>
 </div>
 <div>
   <table class="table">
     <tr>
       <th scope="row">Name</th>
       <td><?php echo $viewAssoc['name']; ?></td>
     </tr>
     <tr>
       <th scope="row">Email</th>
       <td><?php echo $viewAssoc['email']; ?></td>
     </tr>
     <tr>
       <th scope="row">Message</th>
       <td><?php echo $viewAssoc['message']; ?></td>
     </tr>
     <tr>
       <th scope="row">Photo</th>

       <td><img src="uploads/<?php echo $viewAssoc['photo']; ?>" alt="" width="50"></td>
     </tr>
   </table>
 </div>
<?php
 require 'desh_file/desh_footer.php';
 ?>
