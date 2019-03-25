<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
			include "menuutama.php";	break;
		
		#Artikel
		case 'Berita' :				
			if(!file_exists ("berita_detail.php")) die ("Sorry Empty Page!"); 
			include "berita_detail.php";	break;		
		
		case 'allberita' :				
			if(!file_exists ("all_berita.php")) die ("Sorry Empty Page!"); 
			include "all_berita.php";	break;	

		case 'Einap' :				
			if(!file_exists ("einap.php")) die ("Sorry Empty Page!"); 
			include "einap.php";	break;

		case 'detailRS' :				
			if(!file_exists ("detail_einap.php")) die ("Sorry Empty Page!"); 
			include "detail_einap.php";	break;		

		case 'Faskes' :				
			if(!file_exists ("faskes.php")) die ("Sorry Empty Page!"); 
			include "faskes.php";	break;		
		
		
		
							
		default:
			if(!file_exists ("user/artikel.php")) die ("Empty Main Page!"); 
			include "user/artikel.php";						
		break;
	}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
	include "menuutama.php";	
}
?>