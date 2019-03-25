<div class="main_bg">
<div class="wrap">
<div class="main">

	<!-- start grids_of_3 -->

<div class="top_main">
		<h2>INFORMASI KETERSEDIAAN TEMPAT TIDUR DI INSTANSI KESEHATAN KABUPATEN MALANG</h2>
	</br></br></br>
		 <h4>
         <b>Data Terakhir Pada : </b>
         </h4>
         <h4>
         <b>
		<?php
		$tanggal= mktime(date("m"),date("d"),date("Y"));
		echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
		date_default_timezone_set('Asia/Jakarta');
		$jam=date("H:i:s");
		echo "| Pukul : <b>". $jam." "."</b>";
		$a = date ("H");
		?> 
		</b>
         </h4>
	</div>

		
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



<form  class="navbar-form pull-right" method="post" accept-charset="utf-8" enctype="multipart/form-data">     <input type="text"  placeholder="Masukkan kata kunci..." name="cari">
      <button type="submit"  name="btncari">Cari Data</button>
    </form>
    <br/>
                            
                            <table class="table1">
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
                                <tr>
                                  <td><?= $item['0'] ?></a></td>
                               <td><a style="color: #444444;" href="?page=detailRS&id=<?php echo $item['DT_RowId']; ?>">  <?= $item['1'] ?></a></td>
                                  <td><?= $item['2'] ?></td>
                                  <td><?= $item['3'] ?></td>
                                  <td><?= $item['4'] ?></td>
                                </tr>
                                  <?php } 
                                } ?>
                                </tbody>
                        
                            </table>
	
</div>
</div>
</div>