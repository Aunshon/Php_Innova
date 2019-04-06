<?php
 require 'desh_file/desh_header.php';
 require 'db.php';

 $selec="SELECT * FROM navbar";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);
 ?>










<h1>Change NavBar Items</h1>
<form action="navbarpost.php" method="post">
  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>phone now (<?php echo $data['phone']; ?>)</th>
        <th>Now it is--(<?php echo $data['one']; ?>)</th>
        <th>Now it is--(<?php echo $data['two']; ?>)</th>
        <th>Now it is--(<?php echo $data['three']; ?>)</th>
        <th>Now it is--(<?php echo $data['four']; ?>)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="one" placeholder="Change <?php echo $data['phone']; ?>" > </td>
        <td> <input type="text" name="two" placeholder="Change <?php echo $data['one']; ?>" > </td>
        <td> <input type="text" name="three" placeholder="Change <?php echo $data['two']; ?>" > </td>
        <td> <input type="text" name="four" placeholder="Change <?php echo $data['three']; ?>" > </td>
        <td> <input type="text" name="five" placeholder="Change <?php echo $data['four']; ?>" > </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change NavBar</button>
</form>










<?php
 require 'desh_file/desh_footer.php';
 ?>
