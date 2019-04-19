<?php
/* File ini nantinya akan menjadikan:
 * data pada database berupa data XML
 */
include 'conf.php';
$konfigurasi = new konfigurasi();
$getData = $konfigurasi->getXMLData('tb_kanpol');
header("Content-type: text/xml");
try {
  echo "<markers>";
    while ($result = $getData->fetch(PDO::FETCH_OBJ)) {
    if ($getData->rowCount() < 1) {
     echo "<marker Data Kosong />";
    }
    else {
     echo "<marker ";
     echo "a='" . $result->id_kanpol. "' ";
     echo "b='" . $result->jenis_kanpol. "' ";
     echo "c='" . $result->nama_kanpol. "' ";
     echo "d='" . $result->alamat_kanpol. "' ";
     echo "e='" . $result->telp_kanpol. "' ";
     echo "f='" . $result->lat. "' ";
     echo "g='" . $result->lng. "' ";
     echo "h='" . $result->location_status. "' ";
     echo "/>";
    }
   }
  echo "</markers>";
}
catch (PDOException $b) {
   echo $b->getMessage();
}


?>
