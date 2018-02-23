<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo url_assets;?>savory/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo url_assets;?>savory/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Savory <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>crud/tambah">Register</a></li>
						<li class="btn-cta"><a href="<?= base_url('index.php');?>/login"><span>Login</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>	
	<div class="fh5co-hero">
	<div class="container" style="margin-top: 75px;">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Airline</th>
					<th>Berangkat</th>
					<th>Kedatangan</th>
					<th>Dari</th>
					<th>Ke</th>
					<th>Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php $no=0; foreach($data_rute as $row) { $no++ ?>
					<tr>
						<td><?php echo $row['transportation_id']; ?></td>
						<td><?php echo $row['depart_at']; ?></td>
						<td><?php echo $row['arrival_at']; ?></td>
						<td><?php echo $row['rute_from']; ?></td>
						<td><?php echo $row['rute_to']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><a href="<?php echo base_url();?>welcome/pesan/<?php echo $row['id']; ?>" class="btn btn-info" onclick="pesan(<?php echo $row['id'];?>)">pesan</a></td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
	</div>
</div>
				
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo url_assets;?>savory/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo url_assets;?>savory/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo url_assets;?>savory/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo url_assets;?>savory/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="<?php echo url_assets;?>savory/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="<?php echo url_assets;?>savory/js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="<?php echo url_assets;?>savory/js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="<?php echo url_assets;?>savory/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo url_assets;?>savory/js/magnific-popup-options.js"></script>
	
	<script src="<?php echo url_assets;?>savory/js/moment.min.js"></script>
	<script src="<?php echo url_assets;?>savory/js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="<?php echo url_assets;?>savory/js/main.js"></script>

	</body>
</html>

