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
     echo "a='" . $result->id_bencana. "' ";
     echo "b='" . $result->nama_pelapor. "' ";
     echo "c='" . $result->id_pelapor. "' ";
     echo "d='" . $result->alamat_bencana. "' ";
     echo "e='" . $result->jenis_bencana. "' ";
     echo "f='" . $result->keterangan. "' ";
     echo "g='" . $result->tgl_bencana. "' ";
     echo "h='" . $result->lat. "' ";
     echo "i='" . $result->lng. "' ";
     echo "j='" . $result->location_status. "' ";
     echo "/>";
    }
   }
  echo "</markers>";
}
catch (PDOException $b) {
   echo $b->getMessage();
}


?>
