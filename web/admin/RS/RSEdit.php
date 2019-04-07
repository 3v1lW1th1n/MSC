<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Malang Smart City</title>
		<link rel="shortcut icon" href="../assets/images/iconkabmalangresize.png"/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
			
			
				<!-- start: search & user box -->
				<div class="header-right">
			
						
					<ul class="notifications">
						
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="../assets/images/!logged-user.jpg" />
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
									
									<li class="nav-parent">
										<a>
											<i class="fa fa-bell" aria-hidden="true"></i>
											<span>Data Kedaruratan</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="#">
													 Ambulan
												</a>
											</li>
											<li>
												<a href="#">
													 Bencana Alam
												</a>
											</li>
											<li>
												<a href="#">
													 Polisi
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-parent">
										<a>
											<i class="fa fa-institution (alias)" aria-hidden="true"></i>
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
												<a href="EinapView.php">
													 E-Inap
												</a>
											</li>
											<li>
												<a href="#">
													 Fasilitas Kesehatan
												</a>
											</li>
											<li>
												<a href="#">
													 Rumah Sakit
												</a>
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

<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Data Rumah Sakit</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										
									</div>
								</div>

									<?php 
									include '../../db/koneksi.php';
									$id = $_GET['id'];
									$data = mysqli_query($koneksi,"select * from tb_rs where id_rs='$id'");
									while($d = mysqli_fetch_array($data)){
									?>

								<form method="post" action="edit_aksi.php" class="form-horizontal form-bordered">
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">ID Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="a" class="form-control" id="inputDefault" value="<?php echo $d['id_rs']; ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Nama Rumah Sakit</label>
												<div class="col-md-3">
													<input type="text" name="b" class="form-control" id="inputDefault" value="<?php echo $d['nama_rs']; ?>"> 
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Alamat Puskesmas</label>
												<div class="col-md-6">
													<input type="text" name="c" class="form-control" id="inputDefault" value="<?php echo $d['alamat_rs']; ?>"> 
												</div>

											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Telepon Puskesmas</label>
												<div class="col-md-3">
													<input type="text" name="d" class="form-control" id="inputDefault" value="<?php echo $d['telp_rs']; ?>">
												</div>
											</div>

											<div class="col-sm-9 text-right">
											<button type="submit" class="btn btn-primary hidden-xs">Simpan</button>
											</div>
								</form>
									
									<?php 
									}
									?>
								
							</div>
						</section>
					<!-- end: page -->



				</section>

			


		<!-- Vendor -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="../assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="../assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.js"></script>
		<script src="../assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="../assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="../assets/vendor/raphael/raphael.js"></script>
		<script src="../assets/vendor/morris/morris.js"></script>
		<script src="../assets/vendor/gauge/gauge.js"></script>
		<script src="../assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="../assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="../assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="../assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>