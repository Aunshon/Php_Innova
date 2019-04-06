<?php
 require 'desh_file/desh_header.php';
 require 'db.php';

 $selec="SELECT * FROM m_contact";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);
 ?>










<h1>Change Contact</h1>
<form action="newcontact.php" method="post">
  <table class="table mt-5 " id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Address now is (<?php echo $data['address']; ?>)</th>
        <th>Phone now is (<?php echo $data['phone']; ?>)</th>
        <th>Email now is (<?php echo $data['email']; ?>)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="text" name="address" placeholder="Change " > </td>
        <td> <input type="text" name="phone" placeholder="Change " > </td>
        <td> <input type="text" name="email" placeholder="Change" > </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" name="button" class="btn btn-success form-control">Change NavBar</button>
</form>










<?php
 require 'desh_file/desh_footer.php';
 ?>
