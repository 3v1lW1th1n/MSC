<?php
# KONTROL MENU PROGRAM
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("menuutama.php")) die ("Empty Main Page!"); 
			include "menuutama.php";	break;
		
		#E-Inap
		case 'EinapView' :				
			if(!file_exists ("admin/E-inap/EinapView.php")) die ("Sorry Empty Page!"); 
			include "admin/E-inap/EinapView.php";	break;

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