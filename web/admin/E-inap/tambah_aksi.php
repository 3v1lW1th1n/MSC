<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['a'];
$alamat = $_POST['b'];
$telp = $_POST['c'];
$nama = $_POST['d'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into einap values('$id','$alamat','$telp','$nama')");
 
// mengalihkan halaman kembali ke view
echo "<meta http-equiv='refresh' content='0; url=?page=EinapView'>";
 
?>