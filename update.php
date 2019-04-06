<?php
 require 'desh_file/desh_header.php';
 $RecentPhotoId=$_GET['id'];
 $getPhotoQuery="SELECT photo FROM contact where id=$RecentPhotoId";
 $getPhotoResult=mysqli_query($connectionQuery,$getPhotoQuery);
 $getPhoto=mysqli_fetch_assoc($getPhotoResult);
 //echo $getPhoto['photo'];
 ?>
 <div class="text-center py-4">
   <h1>Update Your Information</h1>
 </div>

<div class="col-lg-7 m-auto py-5">
 <form action="update_code.php" method="post" enctype="multipart/form-data">
   <div class="form-group">
     <input type="hidden" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="<?php echo $_GET['id']; ?>">
   </div>
<div class="form-group">
 <label for="exampleInputEmail1">Name</label>
 <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="<?php echo $_GET['name']; ?>">
</div>
<div class="form-group">
 <label for="exampleInputEmail1">Email</label>
 <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="<?php echo $_GET['email']; ?>">
</div>
<div class="form-group">
 <label for="exampleInputEmail1">Message</label>
 <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Message" value="<?php echo $_GET['message']; ?>">
</div>
<div class="form-control">
 <input type="file" name="updatephoto" value="">
</div>
<div class="text-center">
 <img src="uploads/<?php echo $getPhoto['photo']; ?>" alt="" width="400">
</div>
<br><br>
   <div class="text-center">
           <button type="submit" class="btn btn-success">Update</button>
           <br><br>
   </div>
</form>
</div>
<?php
 require 'desh_file/desh_footer.php';
 ?>
