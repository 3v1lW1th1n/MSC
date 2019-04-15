<?php
/* File ini nantinya akan menjadikan:
 * data pada database berupa data XML
 */
include 'conf.php';
$konfigurasi = new konfigurasi();
$getData = $konfigurasi->getXMLData('tb_rs');
header("Content-type: text/xml");
try {
  echo "<markers>";
    while ($result = $getData->fetch(PDO::FETCH_OBJ)) {
    if ($getData->rowCount() < 1) {
     echo "<marker Data Kosong />";
    }
    else {
     echo "<marker ";
     echo "a='" . $result->id_rs. "' ";
     echo "b='" . $result->nama_rs. "' ";
     echo "c='" . $result->alamat_rs. "' ";
     echo "d='" . $result->telp_rs. "' ";
     echo "e='" . $result->lat. "' ";
     echo "f='" . $result->lng. "' ";
     echo "g='" . $result->location_status. "' ";
     echo "/>";
    }
   }
  echo "</markers>";
}
catch (PDOException $b) {
   echo $b->getMessage();
}


?>
