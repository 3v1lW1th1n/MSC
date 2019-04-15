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
    $id_rs = $_GET['id_rs'];
    $nama_rs = $_GET['nama_rs'];
    $alamat_rs = $_GET['alamat_rs'];
    $telp_rs = $_GET['telp_rs'];
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    //$description =$_GET['description']
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO tb_rs " .
        " (id_rs, nama_rs, alamat_rs, telp_rs, lat, lng) " .
        " VALUES ('%s', '%s', '%s', '%s', '%s', '%s');",
        mysqli_real_escape_string($con,$id_rs),
        mysqli_real_escape_string($con,$nama_rs),
        mysqli_real_escape_string($con,$alamat_rs),
        mysqli_real_escape_string($con,$telp_rs),
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
    $id_rs =$_GET['id_rs'];
    $confirmed =$_GET['confirmed'];
    // update location with confirm if admin confirm.
    $query = "update tb_rs set location_status = $confirmed WHERE id_rs = $id_rs ";
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
select id_rs,nama_rs,alamat_rs,telp_rs,lat,lng,location_status as isconfirmed
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
select id_rs,nama_rs,alamat_rs,telp_rs,lat,lng,location_status as isconfirmed
from tb_rs");

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