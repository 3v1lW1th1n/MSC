<?php
include '../../db/koneksi.php';

// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}
if(isset($_GET['confirm_location'])) {
    confirm_location();
}



function add_location(){
    $con=mysqli_connect ("localhost", 'root', '','projectpkl');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $id_bencana = $_GET['id_bencana'];
    $nama_pelapor = $_GET['nama_pelapor'];
    $telp_pelapor = $_GET['telp_pelapor'];
    $alamat_bencana = $_GET['alamat_bencana'];
    $jenis_bencana = $_GET['jenis_bencana'];
    $keterangan = $_GET['keterangan'];
    $tgl_bencana = $_GET['tgl_bencana'];
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    //$description =$_GET['description']
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO tb_bencana " .
        " (id_bencana, nama_pelapor, telp_pelapor, alamat_bencana, jenis_bencana, keterangan, tgl_bencana, lat, lng) " .
        " VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$id_bencana),
        mysqli_real_escape_string($con,$nama_pelapor),
        mysqli_real_escape_string($con,$telp_pelapor),
        mysqli_real_escape_string($con,$alamat_bencana),
        mysqli_real_escape_string($con,$jenis_bencana),
        mysqli_real_escape_string($con,$keterangan),
        mysqli_real_escape_string($con,$tgl_bencana),
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng));

    $result = mysqli_query($con,$query);
    echo"Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function confirm_location(){
    $con=mysqli_connect ("localhost", 'root', '','projectpkl');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $id_bencana =$_GET['id_bencana'];
    $confirmed =$_GET['confirmed'];
    // update location with confirm if admin confirm.
    $query = "update tb_bencana set location_status = $confirmed WHERE id_bencana = $id_bencana";
    $result = mysqli_query($con,$query);
    echo "Inserted Successfully";
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_confirmed_locations(){
    $con=mysqli_connect ("localhost", 'root', '','projectpkl');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id_bencana,nama_pelapor,telp_pelapor,alamat_bencana,jenis_bencana,keterangan,tgl_bencana,lat,lng,location_status as isconfirmed
from tb_rs WHERE  location_status = 1
  ");

    $rows = array();

    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }

    $indexed = array_map('array_values', $rows);
    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function get_all_locations(){
    $con=mysqli_connect ("localhost", 'root', '','projectpkl');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"
select id_bencana,nama_pelapor,telp_pelapor,alamat_bencana,jenis_bencana,keterangan,tgl_bencana,lat,lng,location_status as isconfirmed
from tb_bencana");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
  $indexed = array_map('array_values', $rows);
  //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}
function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}

?>