<?php
 require 'desh_file/desh_header.php';
require 'db.php';
 $seleca="SELECT * FROM aboutfirst";
 $querya=mysqli_query($connectionQuery,$seleca);
 $dataa=mysqli_fetch_assoc($querya);

 $selec="SELECT * FROM aboutsecond";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);
 ?>


 <h1>About Image</h1>
 <div width="400px">
   <form action="aboutimagepost.php" method="post" enctype="multipart/form-data">

        <div  class="form-control">
          <input type="file" name="updatephoto" value="">
        </div>
         <br>
         <button type="submit" name="button" class="btn btn-primary form-control">Add</button>
   </form>
 </div>
 <br>
 <br>



 <div >
   <h1>Change Titles</h1>

<h2>First Part</h2>
     <form action="aone.php" method="post">
       <table class="table mt-5 " id="table_id">
         <thead class="thead-dark">
           <tr>
             <th>First Header</th>
             <th>Firsr Header ditels</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td> <input type="text" name="one" placeholder="Change " value="<?php echo $dataa['header'] ?>"> </td>
             <td> <input type="text" name="two" placeholder="Change " value="<?php echo $dataa['details'] ?>"></td>
           </tr>
         </tbody>
       </table>
       <button type="submit" name="button" class="btn btn-success form-control">Change First Part</button>
     </form>
     <h2>Second Part</h2>
<form  action="atwo.php" method="post">
  <table class="table mt-10 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Second Header</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="one" placeholder="Change " value="<?php echo $data['header'] ?>"> </td>

      </tr>
    </tbody>
  </table>



  <table class="table mt-10 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Item 1</th>
        <th>Item 2</th>
        <th>Item 3</th>
        <th>Item 4</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="one" placeholder="Change " value="<?php echo $data['onr'] ?>"> </td>
        <td> <input type="text" name="two" placeholder="Change " value="<?php echo $data['two'] ?>"> </td>
        <td> <input type="text" name="two" placeholder="Change " value="<?php echo $data['three'] ?>"> </td>
        <td> <input type="text" name="two" placeholder="Change " value="<?php echo $data['four'] ?>"> </td>

      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change Second Part</button>


</form>




 </div>



<?php
 require 'desh_file/desh_footer.php';
 ?>
