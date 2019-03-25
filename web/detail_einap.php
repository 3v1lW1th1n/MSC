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
                            <table class="table1">
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