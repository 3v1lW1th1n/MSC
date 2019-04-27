<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$alamat = $_POST['b'];
$telp = $_POST['c'];
$nama = $_POST['d'];

// menginput data ke database
mysqli_query($koneksi,"update einap set DT_RowID='$id', Alamat='$alamat', Telp='$telp', NamaRS='$nama' where DT_RowID='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=EinapView'>";
 
?>