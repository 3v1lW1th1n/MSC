<?php 
// koneksi database
include '../db/koneksi.php';
// if(isset($_POST['tambah'])){ 
// menangkap data yang di kirim dari form
$id_faskes = $_POST['a'];
$id_rs = $_POST['b'];
$jenis_faskes = $_POST['c'];
$status_tersedia = $_POST['d'];
$jml_tersedia = $_POST['e'];
$jml_terpakai = $_POST['f'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_faskes values('$id_faskes','$jenis_faskes','$id_rs','$status_tersedia', '$jml_tersedia','$jml_terpakai')");

 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=FaskesView'>";

?>

