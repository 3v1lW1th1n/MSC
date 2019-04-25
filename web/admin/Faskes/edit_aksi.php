<?php 
// koneksi database
include '../db/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_faskes = $_POST['a'];
$id_rs = $_POST['b'];
$jenis_faskes = $_POST['c'];
$status_tersedia = $_POST['d'];
$jml_tersedia = $_POST['e'];
$jml_terpakai = $_POST['f'];

 
// menginput data ke database
mysqli_query($koneksi,"update tb_faskes set id_faskes='$id_faskes',  jenis_faskes='$jenis_faskes', id_rs='$id_rs', status_ketersediaan='$status_tersedia', jml_tersedia='$jml_tersedia', terpakai='$jml_terpakai' where id_faskes='$id_faskes'");
 
// mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=FaskesView'>";
 
?>