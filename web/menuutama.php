<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="top_main">
		<h2>Sekilas Malang</h2>

		
		<?php 
		include 'db/koneksi.php';
		$sebelum = mysqli_query($koneksi,"select JudulBerita, IsiBerita from berita GROUP BY berita.id_berita DESC limit 0,2");
		while($t = mysqli_fetch_array($sebelum)){
			?>

		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="#">
				<h3><?php echo $t['JudulBerita'] ?></h3>
				 <?php
 // Tampilkan hanya sebagian isi berita
                    $isi_berita = htmlentities(strip_tags($t['IsiBerita'])); // membuat paragraf pada isi berita dan mengabaikan tag html
                    $isi = substr($isi_berita,0,180); // ambil sebanyak 180 karakter
                    $isi = substr($isi_berita,0,strrpos($isi," ")); // potong per spasi kalimat
				 ?>
				 <span class="price"><?php echo $isi ?>... <a class="submit" style="height:20px; padding-left:3px; padding-top:2px;" href="?page=Artikel&kd=<?php echo $t['id_berita']; ?>">Selengkapnya..</a></span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="details.html">
				<img src="images/pic2.jpg" alt=""/>
				<h3>buffalo decollete</h3>
				<span class="price">$185,99</span>
				<span class="price1 bg">on sale</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="details.html">
				<img src="images/pic3.jpg" alt=""/>
				<h3>even & odd</h3>
				<span class="price">$145,99</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="top_main">
		<h2>Berita Malang</h2>
		<a href="#">show all</a>
		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="details.html">
				<img src="images/pic4.jpg" alt=""/>
				<h3>buffalo decollete</h3>
				<span class="price">$145,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="details.html">
				<img src="images/pic5.jpg" alt=""/>
				<h3>even & odd</h3>
				<span class="price">$185,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="details.html">
				<img src="images/pic6.jpg" alt=""/>
				<h3>buffalo decollete</h3>
				<span class="price">$145,99</span>
				<span class="price1 bg1">out of stock</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- start grids_of_2 -->
	<div class="grids_of_2">
		<div class="grid1_of_2">
			
			
		</div>
		
		<div class="clear"></div>
	</div>
</div>
</div>
</div>