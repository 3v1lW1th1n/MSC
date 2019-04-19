<?php
error_reporting(0);
include"db/koneksi.php";
?>

<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Malang Smart City</title>
		<link rel="shortcut icon" href="assets/images/iconkabmalangresize.png"/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>



<script type="text/javascript" src="../assets/jquery-1.11.1.js"></script>
<link rel="stylesheet" href="..//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="..//code.jquery.com/jquery-1.10.2.js"></script>
<script src="..//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW-LxWC1ML0a6FbUzgC6ExKfh6xrb8oZM&callback=initMap"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
			
			
				<!-- start: search & user box -->
				<div class="header-right">
			
						
				<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href=" " data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/admin.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">Admin</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
						
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">


									<li>
										<a href="?page ">
											<i class="fa fa-institution (alias)" aria-hidden="true"></i>
											<span>Home</span> 
										</a>
									</li>

									
									<li class="nav-parent">
										<a>
											<i class="fa fa-bell" aria-hidden="true"></i>
											<span>Data Kedaruratan</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="?page=AmbulanView">
													 Ambulan
												</a>
											</li>
											<li>
												<a href="?page=KanpolView">
													 Kantor Polisi
												</a>
											</li>
											<li>
												<a href="#">
													 Bencana Alam
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-parent">
										<a>
											<i class="fa fa-cogs" aria-hidden="true"></i>
											<span>Data Layanan Umum</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 PJU
												</a>
											</li>
											<li>
												<a href="#">
													 PDAM
												</a>
											</li>
											<li>
												<a href="#">
													 PLN
												</a>
											</li>
											<li>
												<a href="#">
													 Stok Darah
												</a>
											</li>

										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Data Pengaduan</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 Surat Warga
												</a>
											</li>
											<li>
												<a href="#">
													 E-Lapor
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											<span>Data Informasi</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="?page=EinapView">
													 E-Inap
												</a>
											</li>
											<li>
												<a href="?page=FaskesView">
													 Fasilitas Kesehatan
												</a>
											</li>
											<li>
												<a href="?page=RSView">
													 Rumah Sakit
												</a>
											</li>
										</ul>
									</li>


										</ul>
									</li>
								</ul>
							</nav>
				

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

			<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
					</header>

						<div class="row">
							<?php include "buka_file.php" ?>				
					</div>

				</section>
			</div>

		</section>

		

					

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<!-- Examples -->
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
		

		<script>
			$(document).ready(function(){
  				$('#einap1').DataTable();
			});
		</script>

		<script>
			$(document).ready(function(){
  				$('#faskes1').DataTable();
			});
		</script>

		<script>
			$(document).ready(function(){
  				$('#dataRS1').DataTable();
			});
		</script>

		<script>
			$(document).ready(function(){
  				$('#tbAmbulan').DataTable();
			});
		</script>

		<script>
			$(document).ready(function(){
  				$('#tbKanpol').DataTable();
			});
		</script>




	</body>
</html>