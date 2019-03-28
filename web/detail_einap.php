<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <!-- font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/owl.carousel.css">
    <link rel="stylesheet" href="css2/owl.theme.css">
    <link rel="stylesheet" href="css2/owl.transitions.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/normalize.css">
  <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/wave/waves.min.css">
    <link rel="stylesheet" href="css2/wave/button.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/notika-custom-icon.css">
    <!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="css2/jquery.dataTables.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css2/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js2/vendor/modernizr-2.8.3.min.js"></script>
</head>
<div class="main_bg">
<div class="wrap">
<div class="main">
<?php include ("db/koneksi.php"); ?>
  <!-- start grids_of_3 -->

  <?php
$id_puskesmas = $_GET['id'];

$data = ("SELECT * FROM einap WHERE DT_RowID = '$id_puskesmas'"); 
$query = mysqli_query($koneksi, $data); 
   

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://e-inap.malangkab.go.id/User/getDetailRs/" . $id_puskesmas,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $res = json_decode($response);
  // var_dump($res);
} 
?>


<div class="top_main">

  <?php while ($row = mysqli_fetch_array($query)){ ?> 

    <h2><?php echo $row['NamaRS'] ?></h2>
  </br>
         <h4> <b>Alamat :  <?php echo $row['Alamat'] ?> </b> </h4>
         <h4><b>Telp : <?php echo $row['Telp'] ?></b>

  <?php } ?>

         <b>
         </h4>
  </div>                            
                             <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th>No</th>
                                            <th>Jenis Tempat Tidur</th>
                                            <th>Spesialis</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Usia</th>
                                            <th>Jumlah Tempat Tidur</th>
                                            <th>Terpakai</th>
                                            <th>Tersedia</th>
                                    </tr>
                                </thead>
                                <tbody>
                          
                                 <?php foreach ($res as $value) { 
                                  foreach ($value as $item) {      
                                  $item = (array)$item;?>
                                <tr>
                                  <td><?= $item['0'] ?></a></td>
                               <td><?= $item['1'] ?></a></td>
                                  <td><?= $item['2'] ?></td>
                                  <td><?= $item['3'] ?></td>
                                  <td><?= $item['4'] ?></td>
                                  <td><?= $item['5'] ?></td>
                                  <td><?= $item['6'] ?></td>
                                  <td><?= $item['7'] ?></td>
                                </tr>
                                  <?php } 
                                } ?>
                                </tbody>
                        
                            </table>
  
</div>
</div>
</div>
   
    <!-- jquery
    ============================================ -->
    <script src="js2/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js2/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js2/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js2/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js2/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js2/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js2/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="js2/counterup/jquery.counterup.min.js"></script>
    <script src="js2/counterup/waypoints.min.js"></script>
    <script src="js2/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js2/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="js2/sparkline/jquery.sparkline.min.js"></script>
    <script src="js2/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="js2/flot/jquery.flot.js"></script>
    <script src="js2/flot/jquery.flot.resize.js"></script>
    <script src="js2/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="js2/knob/jquery.knob.js"></script>
    <script src="js2/knob/jquery.appear.js"></script>
    <script src="js2/knob/knob-active.js"></script>
    <!--  Chat JS
    ============================================ -->
    <script src="js2/chat/jquery.chat.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="js2/todo/jquery.todo.js"></script>
  <!--  wave JS
    ============================================ -->
    <script src="js2/wave/waves.min.js"></script>
    <script src="js2/wave/wave-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js2/plugins.js"></script>
    <!-- Data Table JS
    ============================================ -->
    <script src="js2/data-table/jquery.dataTables.min.js"></script>
    <script src="js2/data-table/data-table-act.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js2/main.js"></script>
  <!-- tawk chat JS
    ============================================ -->