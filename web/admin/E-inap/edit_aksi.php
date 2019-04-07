<?php 
// koneksi database
include '../../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$nama = $_POST['b'];
$alamat = $_POST['c'];
$telp = $_POST['d'];
 
// menginput data ke database
mysqli_query($koneksi,"update einap set DT_RowID='$id', NamaRS='$nama', Alamat='$alamat', Telp='$telp' where DT_RowID='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:EinapView.php");
 
?>