<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from einap where DT_RowId='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=EinapView'>";
 
?>
