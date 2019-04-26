<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$judul = $_POST['b'];
$isi = $_POST['c'];
 
// menginput data ke database
mysqli_query($koneksi,"update berita set id_berita='$id', JudulBerita='$judul', IsiBerita='$isi' where id_berita='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=BeritaView'>";
 
?>