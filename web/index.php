<?php
error_reporting(0);
include"db/koneksi.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Malang Smart City</title>
<link rel="shortcut icon" href="images/iconkabmalangresize.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

	<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: 'Maven Pro', sans-serif;
	}
 
	.menu-malasngoding{
		background-color: #ffffff;
	}
 
	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu-malasngoding > ul > li {
		float: left;
	}
 
	
	.menu-malasngoding li a {
		display: inline-block;
		color: #2d9270;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu-malasngoding li a:hover{
		background-color: #ffffff;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}
 
	.isi-dropdown a {
		color: #2d9270 !important;
	}
 
	.isi-dropdown a:hover {
		color: #2d9270  !important;
		background: #242424 !important;
	}
</style>

<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo2.png" alt=""/></a>
		</div>	
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->

<div class="wrap">
<div class="header_btm">
		<div class="menu">
			<ul>
				<li class="active"><a href="index.html">Home</a>
				</li>
				<li><a href="products.html">products</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="index.html">pages</a></li>
				<li><a href="blog.html">blog</a></li>
				<li><a href="contact.html">Contact</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
		<nav id="menu-left">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="products.html">products</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="index.html">pages</a></li>
				<li><a href="blog.html">blog</a></li>
				<li><a href="contact.html">Contact</a></li>
				<div class="clear"></div>
			</ul>
		</nav>	
	<div class="clear"></div>
</div>
</div>
		

		
	<div class="clear"></div>
</div>
</div>
<!-- start slider -->
<div class="slider">
				<!---start-image-slider---->
				<div class="image-slider">
					 <div class="wrapper">
                <div id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
						<li>
                            <img src="images/bns.jpg"/>
                            <div class="ei-title">
                            	<h2>Batu Night Spectacular</h2>
                                <h3 class="active">Batu Night Spectacular adalah sebuah lokawisata <br>
                                	yang berada di Kota Batu, Jawa Timur. 
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="details.html"><img src="images/icon_1.png" alt=""></a>
                                	</h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/pulausempu.jpg" alt="image01" />
                            <div class="ei-title">
                            	<h2>Pulau Sempu</h2>
                                <h3 class="active">Pulau Sempu adalah sebuah pulau kecil yang terletak di<br>
                                	sebelah selatan Pulau Jawa.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="details.html"><img src="images/icon_1.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/museumangkut.jpg" alt="image03"/>
                            <div class="ei-title">
                                <h2>Museum Angkut</h2>
                                <h3 class="active">Museum Angkut merupakan museum transportasi dan <br>
                                	tempat wisata modern yang terletak di Kota Batu
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="details.html"><img src="images/icon_1.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/balekambang.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Pantai Balekambang</h2>
                                <h3 class="active">Pantai Balekambang adalah sebuah pantai  <br>
                                	di pesisir selatan.
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="details.html"><img src="images/icon_1.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="images/watuleter.jpg" alt="image05"/>
                            <div class="ei-title">
                                <h2>Pantai Watu Leter</h2>
                                <h3 class="active">Suasana alam yang menyenangkan, deburan ombak <br>
                                	yang menyejukkan kerap menjadi pilihan banyak wisatawan 
                                </h3>
                                <h3>
                                	<a class="ei_icons" href="details.html"><img src="images/icon_1.png" alt=""></a>
                                </h3>
                            </div>
                        </li>
                        
                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
						<li>
							<a href="#">
								<span class="active"></span>
							</a>
						</li>

                        <li class="dropdown"><a href="#"><span></span>
						<ul class="isi-dropdown">
							<li><a href="?page=Ambulan">Ambulan</a></li>
							<li><a href="?page=BencanaAlam">Bencana Alam</a></li>
							<li><a href="?page=Polisi">Polisi</a></li>
						</ul>
                        </a>
                        </li>

                        <li  class="dropdown"><a href="#"><span>Layanan Umum</span></a>
					<ul class="isi-dropdown">
					<li><a href="?page=PLN">PLN</a></li>
					<li><a href="?page=PDAM">PDAM</a></li>
					<li><a href="?page=PJU">PJU</a></li>
					<li><a href="?page=StokDarah">Stok Darah</a></li>
				</ul>
                        </li>

              
                        <li class="dropdown"><a href="#"><span>Pengaduan</span> </a>
					<ul class="isi-dropdown">
					<li><a href="?page=SuratWarga">Surat Warga</a></li>
					<li><a href="?page=Elapor">E-Lapor</a></li>
				</ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Informasi</span></a>
					<ul class="isi-dropdown">
					<li><a href="einap.php">E-Inap</a></li>
					<li><a href="?page=Faskes">Fasilitas Kesehatan</a></li>
					<li><a href="?page=DataRS">Data Rumah Sakit</a></li>
				</ul>
                        </li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
		</div>
		<!---End-image-slider---->	
</div>
<!-- start image1_of_3 -->
<div class="top_bg">
<div class="wrap">

</div>
</div>

<header class="header">
	<div class="menu-malasngoding">
 
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="dropdown"><a>Kedaruratan</a>
				<ul class="isi-dropdown">
					<li><a href="?page=Ambulan">Ambulan</a></li>
					<li><a href="?page=BencanaAlam">Bencana Alam</a></li>
					<li><a href="?page=Polisi">Polisi</a></li>
				</ul>
			</li>
			<li class="dropdown"><a>Layanan Umum</a>
				<ul class="isi-dropdown">
					<li><a href="?page=PLN">PLN</a></li>
					<li><a href="?page=PDAM">PDAM</a></li>
					<li><a href="?page=PJU">PJU</a></li>
					<li><a href="?page=StokDarah">Stok Darah</a></li>
				</ul>
			</li>
			<li class="dropdown"><a>Pengaduan</a>
				<ul class="isi-dropdown">
					<li><a href="?page=SuratWarga">Surat Warga</a></li>
					<li><a href="?page=Elapor">E-Lapor</a></li>
				</ul>
			</li>
			<li class="dropdown"><a>Informasi</a>
				<ul class="isi-dropdown">
					<li><a href="einap.php">E-Inap</a></li>
					<li><a href="faskes.php">Fasilitas Kesehatan</a></li>
					<li><a href="dataRS.php">Data Rumah Sakit</a></li>
				</ul>
			</li>
		</ul>
 
	</div>
</header>
<!-- start main -->
 <?php include "buka_file.php" ?>

<!-- start footer -->
<div class="footer_top">
<div class="wrap">

</div>
</div>
<!-- start footer -->
<div class="footer_mid">
<div class="wrap">

</div>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
	
	<div class="copy">
		<p class="link"><span>© 2019 Dinas Komunikasi dan Informatika Kabupaten Malang</a></span></p>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>