<?php
  require 'db.php';
  $select="SELECT photo FROM inovalogo WHERE status=1";
  $query=mysqli_query($connectionQuery,$select);
  $photo=mysqli_fetch_assoc($query);

  $navbar="SELECT * FROM navbar";
  $navbarquery=mysqli_query($connectionQuery,$navbar);
  $navdata=mysqli_fetch_assoc($navbarquery);

  $selectBanner="SELECT photo FROM banner_pic  WHERE status=1";
  $navbarqueryBanner=mysqli_query($connectionQuery,$selectBanner);
  $dataBanner=mysqli_fetch_assoc($navbarqueryBanner);
  $bannerPhoto=$dataBanner['photo'];
  //echo $bannerPhoto ;

  $bannerdata="SELECT * FROM banner_titles";
  $bannerresult=mysqli_query($connectionQuery,$bannerdata);
  $bd=mysqli_fetch_assoc($bannerresult);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>INNOVA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display --><?php //echo $photo['photo']; ?>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <img src="uploads/inovalogo/<?php echo $photo['photo']; ?>" class="img-responsive"> </a>
      <div class="phone"><span>Call Today</span> <?php echo $navdata['phone']; ?> </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll"> <?php echo $navdata['one']; ?> </a></li>
        <li><a href="#services" class="page-scroll"> <?php echo $navdata['two']; ?> </a></li>
        <li><a href="#testimonials" class="page-scroll"> <?php echo $navdata['three']; ?> </a></li>
        <li><a href="#contact" class="page-scroll"><?php echo $navdata['four']; ?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse About  Services  Testimonials  Contact-->
  </div>
</nav>
<!-- Header -->
<header id="header" >
  <?php
    //if ($dataBanner['']) {
      // code...""
    //}
   ?>
   <!-- <div class="intro" style="background:url(banner_pic/<?php //echo '1.jpg'; ?>) no-repeat center; background-size:cover; "> -->
  <div class="intro" style="background:url(banner_pic/<?php echo $bannerPhoto ?>) no-repeat center; background-size:cover; ">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1> <?php echo $bd['one']; ?> </h1>
            <p><?php echo $bd['two']; ?></p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll"><?php echo $bd['three']; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
