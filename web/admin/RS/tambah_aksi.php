<?php 
// koneksi database
include '../../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$nama = $_POST['b'];
$alamat = $_POST['c'];
$telp = $_POST['d'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_rs values('$id','$nama','$alamat','$telp')");
 
// mengalihkan halaman kembali ke index.php
header("location:RSView.php");
 
?>