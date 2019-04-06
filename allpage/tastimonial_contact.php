
<?php
require 'db.php';

 $selectp="SELECT * FROM testimonial";
 $querytp=mysqli_query($connectionQuery,$selectp);
 $data=mysqli_fetch_assoc($querytp);
 ?>

<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2><?php echo $navdata['three']; ?></h2>
    </div>
    <div class="row">
      <?php
          foreach ($querytp as $value) {
       ?>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="testimonial_pic/<?php echo $value['photo']; ?>" alt=""> </div>
          <div class="testimonial-content">
            <p><?php echo $value['des']; ?></p>
            <div class="testimonial-meta"><?php echo $value['name']; ?></div>
          </div>
        </div>
      </div>
<?php } ?>
    </div>
  </div>
</div>
