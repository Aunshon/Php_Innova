
<?php
require 'db.php';

 $selec="SELECT * FROM navbar";
 $query=mysqli_query($connectionQuery,$selec);
 $data=mysqli_fetch_assoc($query);

 $bannerdata="SELECT * FROM banner_titles";
 $bannerresult=mysqli_query($connectionQuery,$bannerdata);
 $bd=mysqli_fetch_assoc($bannerresult);

 $getPhotoQuery="SELECT photo FROM aboutimage ";
 $getPhotoResult=mysqli_query($connectionQuery,$getPhotoQuery);
 $getPhoto=mysqli_fetch_assoc($getPhotoResult);

 $seleca="SELECT * FROM aboutfirst";
 $querya=mysqli_query($connectionQuery,$seleca);
 $dataa=mysqli_fetch_assoc($querya);

 $select="SELECT * FROM aboutsecond";
 $queryt=mysqli_query($connectionQuery,$select);
 $datat=mysqli_fetch_assoc($queryt);

 $selectp="SELECT * FROM service";
 $querytp=mysqli_query($connectionQuery,$selectp);
 $datap=mysqli_fetch_assoc($querytp);
 ?>

<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3><?php echo $bd['four']; ?></h3>
        <p><?php echo $bd['five']; ?></p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll"><?php echo $bd['six']; ?></a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="uploads/<?php echo $getPhoto['photo']; ?>" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php echo $dataa['header'] ?></h2>
          <p><?php echo $dataa['details'] ?></p>
          <h3><?php echo $datat['header'] ?></h3>
          <div class="list-style">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <ul>
                <li><?php echo $datat['onr'] ?></li>
                <li><?php echo $datat['two'] ?></li>
                <li><?php echo $datat['three'] ?></li>
                <li><?php echo $datat['four'] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2><?php echo $data['two']; ?></h2>
    </div>

    <div class="row">
      <?php

        foreach ($querytp as $value) {
       ?>
      <div class="col-md-4">
        <div class="service-media"> <img src="service_pic/<?php echo $value['photo'] ?>" alt=" "> </div>
        <div class="service-desc">
          <h3><?php echo $value['header']; ?></h3>
          <p><?php echo $value['discreption'] ?></p>
        </div>
      </div>
      <?php
        }
       ?>
      <!-- <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-2.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Home Additions</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-3.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Bathroom Remodels</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div> -->
    </div>
    <!-- <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Kitchen Remodels</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-5.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Windows & Doors</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Decks & Porches</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div> -->
  </div>
</div>
