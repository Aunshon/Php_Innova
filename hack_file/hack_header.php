<?php
require 'db.php';
$query="SELECT * FROM logo WHERE status=1";
$res=mysqli_query($connectionQuery,$query);
$getPhoto=mysqli_fetch_assoc($res);
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesitem.com/demos/html/Hunt/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2019 15:42:45 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Hunt - Personal Portfolio Template</title>
	<link rel="stylesheet" href="hack_asset/css/style.css">
</head>

<body>

	<!-- header part start -->
	<section id="head">
		<div class="container">
			<div class="row">
				<nav id="header" class="navbar navbar-fixed-top">
					<div id="header-container" class="container navbar-container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a id="brand" class="navbar-brand" href="hack_asset/index.html"><img src="logos/<?php echo $getPhoto['photo']; ?>" alt="logo" class="img-responsive"></a>
						</div>
						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="#slider">Home</a></li>
								<li><a href="#about">About us</a></li>
								<li><a href="#portfolio">Our Portfolio</a></li>
								<li><a href="#service">Our Services</a></li>
								<li><a href="#testimonial">Testimonial</a></li>
								<li><a href="#pricing">Pricing Plan</a></li>
								<li><a href="#team">Our Team</a></li>
								<li><a href="#footer">Contact us</a></li>
							</ul>
						</div><!-- /.nav-collapse -->
					</div><!-- /.container -->
        		</nav><!-- /.navbar -->
			</div>
		</div>
	</section>
	<!-- header part end -->
