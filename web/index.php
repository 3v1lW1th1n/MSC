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
			<a href="index.html"><img src="images/logo2.png"/></a>
		</div>	
		
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->

		
	<div class="clear"></div>
</div>
</div>
<!-- start slider -->

<div class="wrap">
<div class="header_btm">
		<div class="menu">
			<ul>
				<li class="active"><a href="index.html">Home</a>
				</li>
				
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
				<div class="clear"></div>
			</ul>
		</div>
		</div>
</div>

				<!---start-image-slider---->
				
					 <div class="wrapper">
                <div style="width: 1180px; height: 350px" id="ei-slider" class="ei-slider">
                    <ul class="ei-slider-large">
						<li>
                            <img src="images/slider1.png"/>
                            <div class="ei-title">
                             </div>
                        </li>
                        <li>
                            <img src="images/slider2.png"/>
                            <div class="ei-title">
                            </div>
                        </li>
                        <li>
                            <img src="images/slider3.png" alt="image03"/>
                            <div class="ei-title">
                            </div>
                        </li>
                        <li>
                            <img src="images/balekambang.jpg" alt="image04"/>
                            <div class="ei-title">
                                <h2>Pantai Balekambang</h2>
                                <h3 class="active">Pantai Balekambang adalah sebuah pantai  <br>
                                	di pesisir selatan.
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
                            </div>
                        </li>
                        
                         <!--  <li>
                          <img src="images/watuleter.jpg" alt="image05"/>
                            <div class="ei-title">
                                <h2>Pantai Watu Leter</h2>
                                <h3 class="active">Suasana alam yang menyenangkan, deburan ombak <br>
                                	yang menyejukkan kerap menjadi pilihan banyak wisatawan 
                                </h3>
                            </div>
                        </li> -->

                    </ul><!-- ei-slider-large -->
                    <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
						<li>
						</li>
                        <li class="dropdown">
                        </li>
                        <li  class="dropdown">					
                        </li>
                        <li class="dropdown"> 
                        </li>
                        <li class="dropdown">
                        </li>
                    </ul><!-- ei-slider-thumbs -->
                </div><!-- ei-slider -->
            </div><!-- wrapper -->
	
		<!---End-image-slider---->	
<div style="padding: 0px 100px 0px 105px">
<br/><br/><br/><br/><br/><br/>
<p align="center"  style="font-family:Maven Pro; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; color: #57C5A0; line-height: 18px">Apa itu Smart City?</p><br/>
<p align="center">Menurut Perwali Kota Batu No. 78 Tahun 2017 tentang Master Plan Smart City, ide mengenai smart city ialah kota cerdas/pintar yang inovatif menggunakan teknologi informasi dan komunikasi (TIK) yang berkelanjutan dalam membantu masyarakat mengelola sumber daya yang ada, memberikan informasi yang tepat, efisiensi operasi perkotaan, jasa, dan daya saing seiring dengan pemenuhan kebutuhan generasi saat ini dan setelahnya. 
Pada konsepnya, kota cerdas harus memungkinkan warga masyarakat untuk berperan secara aktif dalam pengelolaan kota dengan memberikan umpan balik kepada penyedia layanan, baik dari sektor privat maupun publik.</p>
</div>

<!-- start main -->

<div class="wrap">
<div class="main">

	<div style="padding: 0px 10px 10px 20px" class="login_left">
		<h3>Kedaruratan</h3><br/>
	<img width="150px" height="150px" src="images/ambulan.png">&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="150px" height="150px" src="images/bencana alam.png">&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="150px" height="150px" src="images/polisi.png"><br/>
	<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambulan
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bencana Alam
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Polisi
	</h1><br/>
	
	<h3>Pengaduan</h3><br/>
	<img width="150px" height="150px" src="images/suratwarga.png">&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="150px" height="150px" src="images/elapor.png"><br/>
	<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Warga
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-lapor
	</h1>		

	</div>

<div style="padding: 0px 10px 10px 40px" class="login_left">
		<h3>Layanan Umum</h3><br/>
	<img width="150px" height="150px" src="images/pju.png">&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="150px" height="150px" src="images/pdam.png">&nbsp;&nbsp;&nbsp;&nbsp;
	<img width="150px" height="150px" src="images/STOKDARAH.png"><br/>
	<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PJU
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PDAM
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stok Darah
	</h1><br/>

	<h3>Informasi</h3><br/>
	<a href="einap.php"><img width="150px" height="150px" src="images/einap2.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="faskes.php"><img width="150px" height="150px" src="images/faskes.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="dataRS.php"><img width="150px" height="150px" src="images/datars.png"></a><br/>
	<h1><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-inap
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faskes
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Rumah Sakit
	</h1>		
	</div>
</div>
</div>

	<div class="clear"></div>
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