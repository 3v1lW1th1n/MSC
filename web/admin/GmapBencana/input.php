<?php
include 'conf.php';
$konfigurasi = new konfigurasi();
?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW-LxWC1ML0a6FbUzgC6ExKfh6xrb8oZM&callback=initMap"></script>

          <!-- start: page -->
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
                </div>
            
                <h2 class="panel-title">Data Bencana Alam</h2>
              </header>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-md">
                      <p><strong>Kelola Data Lokasi   </strong>&nbsp<a href="?page=BencanaDataView&aksi=tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>&nbsp<a href="?page=BencanaView" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a></p>
                    </div>
                  </div>
                </div>

<div class="col-md-12">
  <div class="row">
   <?php 
    if ($_GET['page'] == 'BencanaDataView' && isset($_GET['hapus']) == 'true' && !empty($_GET['data']) ) {
     try {
      $delete = $konfigurasi->hapus('tb_bencana','id_bencana',$_GET['data']);
      if ($delete) {
       echo "<script>alert('Data Lokasi Berhasil Dihapus');window.location.href = '?page=BencanaDataView'</script>";
      }
     }
     catch (PDOException $e) {
      echo $e->getMessage();
     }
    }
    else if ($_GET['page'] == 'BencanaDataView' && isset($_GET['aksi']) == 'tambah' && empty($_GET['data'])) {
     if (isset($_POST['simpan'])) {
      try {
       $insert = $konfigurasi->tambah('tb_bencana',$_POST['id_bencana'],$_POST['nama_pelapor'],$_POST['telp_pelapor'],$_POST['alamat_bencana'],$_POST['jenis_bencana'],$_POST['keterangan'],$_POST['tgl_bencana'],$_POST['lat'],$_POST['lng'],$_POST['location_status']);
       if ($insert) {
        echo "<script>alert('Data Lokasi Berhasil Disimpan');window.location.href = '?page=BencanaDataView'</script>";
       }
      }
      catch (PDOException $b) {
       echo $b->getMessage();
      }
     }
     ?>
     
    <script type="text/javascript">
       function updateMarkerPosition(latLng) {
            document.getElementById('lat').value = [latLng.lat()]
            document.getElementById('lng').value = [latLng.lng()]
        }
        function initMap(){
       var map = new google.maps.Map(document.getElementById('maps'), {
           zoom: 14,
           center: new google.maps.LatLng(-7.9797, 112.6304), 
           mapTypeId: google.maps.MapTypeId.ROADMAP,
           mapTypeControl: false,        
           zoomControl: true,
         scaleControl: false,
         streetViewControl: false,
         rotateControl: false,
         fullscreenControl: false
       });
       var latLng = new google.maps.LatLng(-7.9797, 112.6304);
       var marker = new google.maps.Marker({
           position : latLng,
           title : 'lokasi',
           map : map,
           streetViewControl: false,
           draggable : true,
       });
       updateMarkerPosition(latLng);
       google.maps.event.addListener(marker, 'drag', function() {
           updateMarkerPosition(marker.getPosition());
       });
        }
        </script>
   <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="col-md-6">
     <form class="form-horizontal" method="POST" action="">
      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="ID Bencana" name="id_bencana" id="id_bencana" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Nama Pelapor" name="nama_pelapor" id="nama_pelapor" class="form-control">
       </div>
      </div>
      
      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Telepon Pelapor" name="telp_pelapor" id="telp_pelapor" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Lokasi Kejadian" name="alamat_bencana" id="alamat_bencana" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Jenis Bencana" name="jenis_bencana" id="jenis_bencana" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Keterangan" name="keterangan" id="keterangan" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Waktu Kejadian" name="tgl_bencana" id="tgl_bencana" class="form-control" value="<?php
          date_default_timezone_set('Asia/Jakarta');
          echo date("Y-m-d H:i:s");

        ?>">
        
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Latitude" name="lat" id="lat" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Longitude" name="lng" id="lng" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <select class="form-control" name="location_status">
         <option>0</option>
         <option>1</option>
        </select>
       </div>
      </div>
      <div>
      <input type="submit" class="btn btn-success" name="simpan" value="SIMPAN">
      <a href="?page=BencanaDataView" class="btn btn-warning">BATAL</a></div>
     </form>
     </div>
     <div class="col-md-6">
      <div id="maps" style="width:100%;height:300px"></div>
     </div>
    </div>
    </div>
   </div>
    <?php
   }
   else if ($_GET['page'] == 'BencanaDataView' && isset($_GET['aksi']) == 'edit' && !empty($_GET['data'])) {
   $read = $konfigurasi->tampilBerdasarkanData('tb_bencana','id_bencana',$_GET['data']);
   $result = $read->fetch();
   if (isset($_POST['ubah'])) {
    try {
     $update = $konfigurasi->ubah('tb_bencana' , $_POST['nama_pelapor'],$_POST['telp_pelapor'],$_POST['alamat_bencana'],$_POST['jenis_bencana'],$_POST['keterangan'],$_POST['lat'],$_POST['lng'],$_POST['location_status'],'id_bencana',$_GET['data']);
     if ($update) {
      echo "<script>alert('Data Lokasi Berhasil Diubah');window.location.href = '?page=BencanaDataView'</script>";
     }
    }
    catch (PDOException $b) {
     echo $b->getMessage();
    }
   }
    ?>
<script type="text/javascript">
       function updateMarkerPosition(latLng) {
            document.getElementById('lat').value = [latLng.lat()]
            document.getElementById('lng').value = [latLng.lng()]
        }
        function initMap(){
       var map = new google.maps.Map(document.getElementById('maps'), {
           zoom: 14,
           center: new google.maps.LatLng(<?php echo $result['lat'];?>, <?php echo $result['lng']; ?>),
           mapTypeId: google.maps.MapTypeId.ROADMAP,
           mapTypeControl: false,
          zoomControl: true,
         scaleControl: false,
         streetViewControl: false,
         rotateControl: false,
         fullscreenControl: false
       });
       var latLng = new google.maps.LatLng(<?php echo $result['lat'];?>, <?php echo $result['lng']; ?>);
       var marker = new google.maps.Marker({
           position : latLng,
           title : 'lokasi',
           map : map,
           streetViewControl: false,
           draggable : true,
       });
       updateMarkerPosition(latLng);
       google.maps.event.addListener(marker, 'drag', function() {
           updateMarkerPosition(marker.getPosition());
       });
        }
        </script>
     <div class="col-md-12">
      <div class="panel panel-default">
      <div class="panel-body">
      <div class="col-md-6">
       <form class="form-horizontal" method="POST" action="">
        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="ID Bencana" name="id_bencana" id="id_bencana" class="form-control" value="<?php echo $result['id_bencana']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Nama Pelapor" name="nama_pelapor" id="nama_pelapor" class="form-control" value="<?php echo $result['nama_pelapor']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Telepon Pelapor" name="telp_pelapor" id="telp_pelapor" class="form-control" value="<?php echo $result['telp_pelapor']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Lokasi" name="alamat_bencana" id="alamat_bencana" class="form-control" value="<?php echo $result['alamat_bencana']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Jenis Bencana" name="jenis_bencana" id="jenis_bencana" class="form-control" value="<?php echo $result['jenis_bencana']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="keterangan" name="keterangan" id="keterangan" class="form-control" value="<?php echo $result['keterangan']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Waktu Kejadian" name="tgl_bencana" id="tgl_bencana" class="form-control" value="<?php echo $result['tgl_bencana']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Latitude" name="lat" id="lat" class="form-control" value="<?php echo $result['lat']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Longitude" name="lng" id="lng" class="form-control" value="<?php echo $result['lng']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <select class="form-control" name="location_status">
           <?php
          if ($result['location_status'] == "0") {
           echo "
           <option selected>0</option>
           <option>1</option>
           ";
          }
          else if ($result['location_status'] == "1") {
           echo "
            <option>0</option>
            <option selected>1</option>
          ";
          }
          ?>
          </select>
         </div>
        </div>

        <input type="submit" class="btn btn-success" name="ubah" value="UBAH">
        <a href="?page=BencanaDataView" class="btn btn-warning">BATAL</a>
       </form>
       </div>
       <div class="col-md-6">
        <div id="maps" style="width:100%;height:300px"></div>
       </div>
       </div>
     </div>
    </div>
      <?php
     }
    ?>
     <table class="display table table-bordered table-striped mb-none" id="tbBencana">
      <thead>
       <th width="1%">No.</th>
       <th width="2%">ID</th>
       <th width="10%">Nama Pelapor</th>
       <th width="10%">Telepon Pelapor</th>
       <th width="15%">Lokasi Kejadian</th>
       <th width="15%">Jenis Bencana</th>
       <th width="10%">Keterangan</th>
       <th width="10%">Waktu Kejadian</th>
       <th width="7%">Latitude</th>
       <th width="7%">Longitude</th>
       <th width="2%">Status Lokasi</th>
       <th width="30%"><center>Aksi</center></th>
      </thead>
          <tbody>
          <?php
          $read = $konfigurasi->tampil('tb_bencana','id_bencana');
          $no = 1;
          while ($result = $read->fetch()) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php  echo $result['id_bencana'];?></td>
                <td><?php  echo $result['nama_pelapor'];?></td>
                <td><?php  echo $result['telp_pelapor'];?></td>
                <td><?php  echo $result['alamat_bencana'];?></td>
                <td><?php  echo $result['jenis_bencana'];?></td>
                <td><?php  echo $result['keterangan'];?></td>
                <td><?php  echo $result['tgl_bencana'];?></td>
                <td><?php  echo $result['lat'];?></td>
                <td><?php  echo $result['lng'];?></td>
                <td><center><?php  echo $result['location_status'];?></center></td>
                <td><a href="?page=BencanaDataView&aksi=edit&data=<?php echo $result['id_bencana']; ?>" class="btn btn-info"><i class='fa fa-pencil'></i></a>
            &nbsp;<a href="?page=BencanaDataView&hapus=true&data=<?php echo $result['id_bencana']; ?>" class="btn btn-danger"><i class='fa fa-trash-o'></i></a></td>
              </tr>
                <?php
              }
            ?>
          </tbody>
        </table>
      </div>
</div>