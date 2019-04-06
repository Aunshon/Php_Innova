<?php
 require 'session_check.php';
 require 'db.php';
 $userEmail=$_SESSION['check_login'];
 $getuserQueryFromDatabase="SELECT name,photo FROM users_table WHERE email='$userEmail'";
 $confirmQuery=mysqli_query($connectionQuery,$getuserQueryFromDatabase);
 $data=mysqli_fetch_array($confirmQuery);
//echo $data['photo'];

$afterexplode=explode("/",$_SERVER['PHP_SELF']);
$page=end($afterexplode);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="desh_asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="desh_asset/css/font-awesome.min.css" rel="stylesheet">
	<link href="desh_asset/css/styles.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="pro_pic/<?php echo $data['photo']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $data['name']; ?></div>
				<div class="profile-usertitle-status"><?php echo $userEmail; ?></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="<?php if($page=="Desh.php"){echo "active";} ?>"><a href="Desh.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

			<li class="<?php if($page=="contact_list.php"){echo "active";} ?>"><a href="contact_list.php"><em class="fa fa-envelope">&nbsp;</em> All Messages</a></li>
			<li class="<?php if($page=="registration.php"){echo "active";} ?>"><a href="registration.php"><em class="fa fa-user">&nbsp;</em> Add user</a></li>
			<li class="<?php if($page=="changelogo.php"){echo "active";} ?>"><a href="changelogo.php"><em class="fa fa-toggle-off">&nbsp;</em> Change LOGO</a></li>
			<li><a href="#"><em class="fa fa-wrench">&nbsp;</em>panel</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">

				<em class="fa fa-navicon">&nbsp;</em> Innova Settings <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li<?php if($page=="innovasettings.php"){echo "active";} ?>><a class="" href="innovasettings.php">
						<span class="fa fa-wrench">&nbsp;</span>Change Innova Logo
					</a></li>
					<li><a class="" href="innovamenu.php">
						<span class="fa fa-ellipsis-h">&nbsp;</span>Change Menu
					</a></li>
					<li><a class="" href="innovabanner.php">
						<span class="fa fa-image">&nbsp;</span> Change Banner
					</a></li>
          <li><a class="" href="about.php">
            <span class="fa fa-arrow-right">&nbsp;</span> Change About
          </a></li>
          <li><a class="" href="service.php">
            <span class="fa fa-server">&nbsp;</span> Change Service
          </a></li>
          <li><a class="" href="testimonials.php">
            <span class="fa fa-file-text">&nbsp;</span> Change Testimonial
          </a></li>
          <li><a class="" href="m_contact.php">
            <span class="fa fa-envelope">&nbsp;</span> Change contact
          </a></li>
          <li><a class="" href="icon.php">
            <span class="fa fa-share-square-o">&nbsp;</span> Change Social
          </a></li>
          <li><a class="" href="footerch.php">
            <span class="fa fa-anchor">&nbsp;</span> Change Footer
          </a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<div class="col-md-12">
