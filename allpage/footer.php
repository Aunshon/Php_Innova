
<!-- Footer Section -->
<?php
$getuserQueryFromDatabase="SELECT * FROM footer";
$confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
$data=mysqli_fetch_array($confirmQuery);
 ?>
<div id="footer">
  <div class="container text-center">
    <p>&copy; <?php echo $data['copy']; ?> <a href="<?php echo $data['link'] ?>" rel="nofollow"><?php echo $data['name'] ?></a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<!-- 2017 INNOVA. Design by http://www.templatewire.com TemplateWire-->
