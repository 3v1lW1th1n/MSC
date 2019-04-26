<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$nama = $_POST['b'];
$alamat = $_POST['c'];
$telp = $_POST['d'];
$lat = $_POST[NULL];
$lng = $_POST[NULL];
$loc = $_POST[NULL];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_rs values('$id','$nama','$alamat','$telp', '$lat', '$lng', '$loc')");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=RSView'>";
 
?>