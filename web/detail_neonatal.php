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
<body>
<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                        </div>
                        <div class="table-responsive">
<?php include ("db/koneksi.php"); ?>
  <!-- start grids_of_3 -->


<?php
    include 'db/koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from tb_rs where id_rs='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>

<div class="top_main">


         <b>
         </h4>
  </div>                            
                             <table id="data-table-basic" class="table table-striped">
    <h4><?php echo $d['nama_rs'] ?></h4>
    <h4> Jenis kegawatdaruratan : Maternal</h4></br>

                                <thead>
                                    <tr>
                                       <input type="hidden" name="id" value="<?php echo $d['id_rs']; ?>">
                                       <th>Jenis Kegawatdaruratan</th>
                                       <th>Status Ketersediaan</th>
                                       <th>Total Ruangan</th>
                                       <th>Terpakai</th>
                                       <th>Tersedia</th>
                                      </tr>
                                </thead>
                                <tbody>
                        <?php 
                        include 'db/koneksi.php';
                        $data1 = mysqli_query($koneksi,"select * from tb_kegawatdaruratan where id_rs='$id' AND status_jenis='2'");
                        while($row = mysqli_fetch_array($data1)){
                        $status = $row['status_ketersediaan'];
                        $a = $row ['jml_tersedia'];
                        $b = $row ['terpakai'];
                        $tersedia= $a-$b;
                           ?>

                                <tr>
                                       <td><?php echo $row['jenis_kkg']; ?></td>
                                       <td>
                                        <input type="radio" name="status" value="1" <?php if($status=='1'){ echo "checked";} ?> />Ada
                                        <input type="radio" name="status" value="0" <?php if($status=='0'){ echo "checked";}?> />Tidak Ada   
                                       </td>

                                       <td><?php echo $row['jml_tersedia']; ?></td>
                                       <td><?php echo $row['terpakai']; ?></td>
                                       <td><?php echo $tersedia; ?> </td>

                                   </tr>

                                    <?php 
    }
    ?>
  
                                </tbody>
                        
                            </table>
                           


                                  <?php 
                              }
                                ?>

</div>
</div>
</div>
</body>
   
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