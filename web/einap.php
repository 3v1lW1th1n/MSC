<!doctype html>
<html class="no-js" lang="">
<title>Malang Smart City</title>
<link rel="shortcut icon" href="images/iconkabmalangresize.png"/>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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

<div style="height: 49px; background: #252525">
            <a href=" "><img style="padding: 14px 20px 0px 105px;" src="images/logo2.png"/></a>
    </div>  


<body>
 
    <style type="text/css">
    html,body{
        padding: 0;
        margin:0;
        font-family: 'Maven Pro', sans-serif;
    }
 
    .menu-malasngoding{
        background-color: #ffffff;
    }
 
    .menu-malasngoding ul {
        list-style-type: none;
        margin: 0;
        padding: 10px 10px 10px 115px;
        font-size: 18px;
        font-weight: 400;
        overflow: hidden;
    }
 
    .menu-malasngoding > ul > li {
        float: left;
    }
 
    
    .menu-malasngoding li a {
        display: inline-block;
        color: #2d3633;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
 
    .menu-malasngoding li a:hover{
        background-color: #fffff;
    }
 
    li.dropdown {
        display: inline-block;
    }
 
    .dropdown:hover .isi-dropdown {
        display: block;
    }
 
    .isi-dropdown a:hover {
        color: #fff !important;
    }
 
    .isi-dropdown {
        position: absolute;
        display: none;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        background-color: #f9f9f9;
    }
 
    .isi-dropdown a {
        color: #3c3c3c !important;
    }
 
    .isi-dropdown a:hover {
        color: #232323 !important;
        background: #f3f3f3 !important;
    }
</style>
 
 
<header class="header">
    <div class="menu-malasngoding">
  <ul>
                <li ><a href="index.php">Home</a>
                </li>
                
                <li class="dropdown"><a>Kedaruratan</a>
                <ul class="isi-dropdown">
                    <li><a href="?page=Ambulan">Ambulan</a></li>
                    <li><a href="?page=BencanaAlam">Bencana Alam</a></li>
                    <li><a href="?page=Polisi">Polisi</a></li>
                </ul>
                </li>

                <li class="dropdown"><a>Layanan Umum</a>
                <ul class="isi-dropdown">
                    <li><a href="?page=PLN">PLN</a></li>
                    <li><a href="?page=PDAM">PDAM</a></li>
                    <li><a href="?page=PJU">PJU</a></li>
                    <li><a href="?page=StokDarah">Stok Darah</a></li>
                </ul>
                </li>

                <li class="dropdown"><a>Pengaduan</a>
                <ul class="isi-dropdown">
                    <li><a href="?page=SuratWarga">Surat Warga</a></li>
                    <li><a href="?page=Elapor">E-Lapor</a></li>
                </ul>
                </li>
                <li class="dropdown"><a>Informasi</a>
                <ul class="isi-dropdown">
                    <li><a href="einap.php">E-Inap</a></li>
                    <li><a href="faskes.php">Fasilitas Kesehatan</a></li>
                    <li><a href="dataRS.php">Data Rumah Sakit</a></li>
                </ul>
                </li>
                <div class="clear"></div>
            </ul>
    </div>
</header>
 

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
         
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://e-inap.malangkab.go.id/User/GetdataRs",
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
} ?>

                         <img src="images/header_einap4.png">   
                            <table id="data-table-basic" class="table table-striped">
    
  
       Data Terakhir Pada : <br/>
        
    <?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : ".date("d-M-Y", $tanggal);
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
    echo "| Pukul : ". $jam." ";
    $a = date ("H");
    ?> 
 <br/> <br/>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Daftar Rumah Sakit</th>
                                        <th>Jumlah Tempat Tidur</th>
                                        <th>Terpakai</th>
                                        <th>Tersedia</th>
                                    </tr>
                                </thead>
                                <tbody>
                          
                                 <?php foreach ($res as $value) { 
                                  foreach ($value as $item) {      
                                  $item = (array)$item;?>
                                <tr><a href="">
                                  <td><?= $item['0'] ?></td>
                                  <td><a style="color: #444444;" href="detail_einap.php?id=<?php echo $item['DT_RowId']; ?>"><?= $item['1'] ?></td>
                                  <td><?= $item['2'] ?></td>
                                  <td><?= $item['3'] ?></td>
                                  <td><?= $item['4'] ?></td>
                                 </a>
                                </tr>
                                  <?php } 
                                } ?>
                                </tbody>
                        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Data Table area End-->
    
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
  
</body>

</html>