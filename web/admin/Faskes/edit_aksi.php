<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$nama = $_POST['b'];
$alamat = $_POST['c'];
$telp = $_POST['d'];
 
// menginput data ke database
mysqli_query($koneksi,"update tb_rs set id_rs='$id', nama_rs='$nama', alamat_rs='$alamat', telp_rs='$telp' where id_rs='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=RSView'>";
 
?>