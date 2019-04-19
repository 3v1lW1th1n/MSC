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
			if(!file_exists ("E-inap/EinapView.php")) die ("Sorry Empty Page!"); 
			include "E-inap/EinapView.php";	break;

		case 'EinapTambah' :				
			if(!file_exists ("E-inap/EinapTambah.php")) die ("Sorry Empty Page!"); 
			include "E-inap/EinapTambah.php";	break;

		case 'tambah' :				
			if(!file_exists ("E-inap/tambah_aksi.php")) die ("Sorry Empty Page!"); 
			include "E-inap/tambah_aksi.php";	break;

		case 'EinapEdit' :				
			if(!file_exists ("E-inap/EinapEdit.php")) die ("Sorry Empty Page!"); 
			include "E-inap/EinapEdit.php";	break;

		case 'edit' :				
			if(!file_exists ("E-inap/edit_aksi.php")) die ("Sorry Empty Page!"); 
			include "E-inap/edit_aksi.php";	break;

		case 'EinapHapus' :				
			if(!file_exists ("E-inap/EinapHapus.php")) die ("Sorry Empty Page!"); 
			include "E-inap/EinapHapus.php";	break;


		#Rumah Sakit
		case 'RSView' :				
			if(!file_exists ("RS/RSView.php")) die ("Sorry Empty Page!"); 
			include "RS/RSView.php";	break;

		case 'RSTambah' :				
			if(!file_exists ("RS/RSTambah.php")) die ("Sorry Empty Page!"); 
			include "RS/RSTambah.php";	break;

		case 'rs_tambah' :				
			if(!file_exists ("RS/tambah_aksi.php")) die ("Sorry Empty Page!"); 
			include "RS/tambah_aksi.php";	break;

		case 'RSEdit' :				
			if(!file_exists ("RS/RSEdit.php")) die ("Sorry Empty Page!"); 
			include "RS/RSEdit.php";	break;

		case 'rs_edit' :				
			if(!file_exists ("RS/edit_aksi.php")) die ("Sorry Empty Page!"); 
			include "RS/edit_aksi.php";	break;

		case 'RSHapus' :				
			if(!file_exists ("RS/RSHapus.php")) die ("Sorry Empty Page!"); 
			include "RS/RSHapus.php";	break;


			#Faskes
		case 'FaskesView' :				
			if(!file_exists ("Faskes/FaskesView.php")) die ("Sorry Empty Page!"); 
			include "Faskes/FaskesView.php";	break;

		case 'RSTambah' :				
			if(!file_exists ("RS/RSTambah.php")) die ("Sorry Empty Page!"); 
			include "RS/RSTambah.php";	break;

		case 'rs_tambah' :				
			if(!file_exists ("RS/tambah_aksi.php")) die ("Sorry Empty Page!"); 
			include "RS/tambah_aksi.php";	break;

		case 'RSEdit' :				
			if(!file_exists ("RS/RSEdit.php")) die ("Sorry Empty Page!"); 
			include "RS/RSEdit.php";	break;

		case 'rs_edit' :				
			if(!file_exists ("RS/edit_aksi.php")) die ("Sorry Empty Page!"); 
			include "RS/edit_aksi.php";	break;

		case 'RSHapus' :				
			if(!file_exists ("RS/RSHapus.php")) die ("Sorry Empty Page!"); 
			include "RS/RSHapus.php";	break;


		#Kedaruratan - Ambulan
		case 'AmbulanView' :				
			if(!file_exists ("GmapAmbulan/index_mapAmbulan.php")) die ("Sorry Empty Page!"); 
			include "GmapAmbulan/index_mapAmbulan.php";	break;

		case 'AmbulanDataView' :				
			if(!file_exists ("GmapAmbulan/input.php")) die ("Sorry Empty Page!"); 
			include "GmapAmbulan/input.php";	break; 


		#Kedaruratan - Kantor Polisi
		case 'KanpolView' :				
			if(!file_exists ("GmapKanpol/index_mapKanpol.php")) die ("Sorry Empty Page!"); 
			include "GmapKanpol/index_mapKanpol.php";	break;

		case 'KanpolDataView' :				
			if(!file_exists ("GmapKanpol/input.php")) die ("Sorry Empty Page!"); 
			include "GmapKanpol/input.php";	break; 

							
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