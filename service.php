<?php
 require 'desh_file/desh_header.php';

 require 'db.php';
  $seleca="SELECT * FROM aboutfirst";
  $querya=mysqli_query($connectionQuery,$seleca);
  $dataa=mysqli_fetch_assoc($querya);

  $selec="SELECT * FROM aboutsecond";
  $query=mysqli_query($connectionQuery,$selec);
  $data=mysqli_fetch_assoc($query);

  $alldataquery="SELECT * FROM service";
  $alldataresult=mysqli_query($connectionQuery,$alldataquery);
  ?>





  <h1>All Services</h1>

   <table class="table mt-5 " id="table_id">
     <thead class="thead-dark">
       <tr>
         <th>Header</th>
         <th>Image</th>
         <th>Descreption</th>
         <th>Action</th>
       </tr>
     </thead>
     <tbody>
     <?php
     foreach ($alldataresult as $value) {
      ?>
       <tr>
         <td><?php echo $value['header']; ?></td>
         <td><img src="service_pic/<?php echo $value['photo']; ?>" alt=""width="100"></td>
         <td><input type="text" name="one" value="<?php echo $value['discreption'] ?>"></td>
         <td>
           <?php
                ?>
                <!-- <a href="update.php?id=<?php //echo $value['id']; ?>"><input type="submit" name="" value="Update" class="btn btn-success"></a> -->
                <a href="removeservice.php?id=<?php echo $value['id']; ?>"><input type="submit" name="" value="Remove" class="btn btn-danger"></a>
                <?php
                ?>

         </td>
       </tr>

     <?php
      }
      ?>

     </tbody>
   </table>








  <h1>Add New Service</h1>
  <div width="400px">
    <form action="newservice.php" method="post" enctype="multipart/form-data">

         <div  class="form-control">
           <input type="file" name="photo" value="">
         </div>
  </div>
  <br>
  <br>
         <table class="table mt-5 " id="table_id">
           <thead class="thead-dark">
             <tr>
               <th>Header</th>
               <th>Header ditels</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td> <input type="text" name="one" placeholder="Change " > </td>
               <td> <input type="text" name="two" placeholder="Change " ></td>
             </tr>
           </tbody>
         </table>
         <button type="submit" name="button" class="btn btn-success form-control">Add new Service</button>
       </form>






<?php
 require 'desh_file/desh_footer.php';
 ?>
