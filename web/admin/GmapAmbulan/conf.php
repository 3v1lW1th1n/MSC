<?php
/**
* File ini berisi koneksi db, 
* Fungsi CRUD data pada Maps.
*/

class konfigurasi {
   public function __construct() {
    try {
     $host = "localhost";
     $db = "projectpkl";
     $user = "root";
     $pass = "";
     $this->db = new PDO('mysql:host='.$host.';dbname='.$db.'',''.$user.'',''.$pass.'');
     $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Berhasil terkoneksi !";
    }
    catch (PDOException $e) {
     echo $e->getMessage();
    }
   }
public function getXMLData($tabel){
   $getXMLData = $this->db->prepare("SELECT * FROM $tabel");
   $getXMLData->execute();
   return $getXMLData;
}
public function tampil($tabel , $id_rs){
   $tampil = $this->db->prepare("SELECT * FROM $tabel ORDER BY $id_rs ASC");
   $tampil->execute();
   return $tampil;
}
public function tampilBerdasarkanData($tabel , $kondisi ,$id_rs){
   $tampil = $this->db->prepare("SELECT * FROM $tabel WHERE $kondisi='$id_rs'");
   $tampil->execute();
   return $tampil;
}
public function tambah($tabel , $id_rs, $nama_rs, $alamat_rs, $telp_rs, $lat, $lng, $location_status){
   $tambah = $this->db->prepare("INSERT INTO $tabel (id_rs,nama_rs,alamat_rs,telp_rs,lat,lng,location_status) VALUES ('$id_rs','$nama_rs','$alamat_rs','$telp_rs','$lat','$lng','$location_status') ");
   $tambah->execute();
   return $tambah;
}
public function ubah($tabel , $nama_rs,$alamat_rs,$telp_rs,$lat,$lng,$location_status,$kondisi,$nilai){
   $ubah = $this->db->prepare("UPDATE $tabel SET nama_rs='$nama_rs', alamat_rs='$alamat_rs', telp_rs='$telp_rs', lat='$lat', lng='$lng' WHERE $kondisi='$nilai'");
   $ubah->execute();
   return $ubah;
}
public function hapus($tabel , $kondisi,$nilai){
   $hapus = $this->db->prepare("DELETE FROM $tabel WHERE $kondisi='$nilai'");
   $hapus->execute();
   return $hapus;
}
}

?>
