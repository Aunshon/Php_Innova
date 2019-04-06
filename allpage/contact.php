<?php
$selec="SELECT * FROM m_contact";
$query=mysqli_query($connectionQuery,$selec);
$data=mysqli_fetch_assoc($query);


$getuserQueryFromDatabase="SELECT * FROM fonts";
$confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
$datapic=mysqli_fetch_array($confirmQuery);
 ?>

<!-- Contact Section -->
<div id="contact">
  <div class="container">

    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2><?php echo $navdata['four']; ?></h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
          <?php
          // $ch=$_SESSION['messageAlert'];
          //  if ($ch==1){
          //       $_SESSION['messageAlert']=0;
            ?>
            <!-- <div class="alert alert-success" role="alert">
                Message Sent Successfully
            </div> -->

          <?php
          //}
           ?>
        <form name="sentMessage" action="savecontact.php" method="post" id="contactForm" novalidate enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="username">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="mail">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-control">
            <input type="file" name="photo" ></input>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span><?php echo $data['address'] ?></p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span><?php echo $data['phone'] ?></p>
      </div>
      <div class="contact-item">
        <p><span>Email</span><?php echo $data['email'] ?></p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>

            <?php
                foreach ($confirmQuery as $value) {
             ?>
             <?php if ($value['type']=="facebook" && $value['status']==1) {
                ?>
                <li><a href="#"><i class="<?php echo $value['pic']; ?>"></i></a></li>
               <?php
             } ?>
              <?php } ?>


              <?php
                  foreach ($confirmQuery as $value) {
               ?>
               <?php if ($value['type']=="twitter" && $value['status']==1) {
                  ?>
                  <li><a href="#"><i class="<?php echo $value['pic']; ?>"></i></a></li>
                 <?php
               } ?>
                <?php } ?>


                <?php
                    foreach ($confirmQuery as $value) {
                 ?>
                 <?php if ($value['type']=="googleplus" && $value['status']==1) {
                    ?>
                    <li><a href="#"><i class="<?php echo $value['pic']; ?>"></i></a></li>
                   <?php
                 } ?>
                  <?php } ?>


                  <?php
                      foreach ($confirmQuery as $value) {
                   ?>
                   <?php if ($value['type']=="youtube" && $value['status']==1) {
                      ?>
                      <li><a href="#"><i class="<?php echo $value['pic']; ?>"></i></a></li>
                     <?php
                   } ?>
                    <?php } ?>

            <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li> -->


          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
