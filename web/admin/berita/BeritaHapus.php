<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from berita where id_berita='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=BeritaView'>";
 
?>
