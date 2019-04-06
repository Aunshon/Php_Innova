<?php
 require 'desh_file/desh_header.php';
 require 'db.php';

 $selec="SELECT * FROM footer";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);
 ?>










<h1>Change Footer</h1>
<form action="fca.php" method="post">
  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Text now is (<?php echo $data['copy']; ?>)</th>
        <th>Link now is (<?php echo $data['link']; ?>)</th>
        <th>Name now is (<?php echo $data['name']; ?>)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="copy" placeholder="Change " > </td>
        <td> <input type="text" name="link" placeholder="Change " > </td>
        <td> <input type="text" name="name" placeholder="Change" > </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change</button>
</form>










<?php
 require 'desh_file/desh_footer.php';
 ?>
