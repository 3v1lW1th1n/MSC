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
            
                <h2 class="panel-title">Data Ambulan</h2>
              </header>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-md">
                      <p><strong>Kelola Data Lokasi   </strong>&nbsp<a href="?page=AmbulanDataView&aksi=tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>&nbsp<a href="?page=AmbulanView" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a></p>
                    </div>
                  </div>
                </div>

<div class="col-md-12">
  <div class="row">
   <?php 
    if ($_GET['page'] == 'AmbulanDataView' && isset($_GET['hapus']) == 'true' && !empty($_GET['data']) ) {
     try {
      $delete = $konfigurasi->hapus('tb_rs','id_rs',$_GET['data']);
      if ($delete) {
       echo "<script>alert('Data Lokasi Berhasil Dihapus');window.location.href = '?page=AmbulanDataView'</script>";
      }
     }
     catch (PDOException $e) {
      echo $e->getMessage();
     }
    }
    else if ($_GET['page'] == 'AmbulanDataView' && isset($_GET['aksi']) == 'tambah' && empty($_GET['data'])) {
     if (isset($_POST['simpan'])) {
      try {
       $insert = $konfigurasi->tambah('tb_rs',$_POST['id_rs'],$_POST['nama_rs'],$_POST['alamat_rs'],$_POST['telp_rs'],$_POST['lat'],$_POST['lng'],$_POST['location_status']);
       if ($insert) {
        echo "<script>alert('Data Lokasi Berhasil Disimpan');window.location.href = '?page=AmbulanDataView'</script>";
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
        <input type="text" placeholder="ID RS" name="id_rs" id="id_rs" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Nama RS" name="nama_rs" id="nama_rs" class="form-control">
       </div>
      </div>
      
      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Alamat" name="alamat_rs" id="alamat_rs" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Telepon" name="telp_rs" id="telp_rs" class="form-control">
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
         <option>1</option>
        </select>
       </div>
      </div>
      <div>
      <input type="submit" class="btn btn-success" name="simpan" value="SIMPAN">
      <a href="?page=AmbulanDataView" class="btn btn-warning">BATAL</a></div>
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
   else if ($_GET['page'] == 'AmbulanDataView' && isset($_GET['aksi']) == 'edit' && !empty($_GET['data'])) {
   $read = $konfigurasi->tampilBerdasarkanData('tb_rs','id_rs',$_GET['data']);
   $result = $read->fetch();
   if (isset($_POST['ubah'])) {
    try {
     $update = $konfigurasi->ubah('tb_rs' , $_POST['nama_rs'],$_POST['alamat_rs'],$_POST['telp_rs'],$_POST['lat'],$_POST['lng'],$_POST['location_status'],'id_rs',$_GET['data']);
     if ($update) {
      echo "<script>alert('Data Lokasi Berhasil Diubah');window.location.href = '?page=AmbulanDataView'</script>";
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
          <input type="text" placeholder="ID RS" name="id_rs" id="id_rs" class="form-control" value="<?php echo $result['id_rs']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Nama RS" name="nama_rs" id="nama_rs" class="form-control" value="<?php echo $result['nama_rs']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Alamat" name="alamat_rs" id="alamat_rs" class="form-control" value="<?php echo $result['alamat_rs']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Telepon" name="telp_rs" id="telp_rs" class="form-control" value="<?php echo $result['telp_rs']; ?>">
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
          if ($result['location_status'] == "1") {
           echo "
           <option selected>1</option>
           ";
          }
          ?>
          </select>
         </div>
        </div>
        <div>
        <input type="submit" class="btn btn-success" name="ubah" value="UBAH">
        <a href="?page=AmbulanDataView" class="btn btn-warning">BATAL</a>
        </div>
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
     <table class="display table table-bordered table-striped mb-none" id="tbAmbulan">
      <thead>
       <th width="2%">No</th>
       <th width="5%">ID RS</th>
       <th width="15%">Nama RS</th>
       <th width="20%">Alamat</th>
       <th width="15%">Telepon</th>
       <th width="10%">Latitude</th>
       <th width="10%">Longitude</th>
       <th>Status Lokasi</th>
       <th width="30%"><center>Aksi</center></th>
      </thead>
          <tbody>
          <?php
          $read = $konfigurasi->tampil('tb_rs','id_rs');
          $no = 1;
          while ($result = $read->fetch()) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php  echo $result['id_rs'];?></td>
                <td><?php  echo $result['nama_rs'];?></td>
                <td><?php  echo $result['alamat_rs'];?></td>
                <td><?php  echo $result['telp_rs'];?></td>
                <td><?php  echo $result['lat'];?></td>
                <td><?php  echo $result['lng'];?></td>
                <td><center><?php  echo $result['location_status'];?></center></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><a href="?page=AmbulanDataView&aksi=edit&data=<?php echo $result['id_rs']; ?>" class="on-default edit-row"><i class='fa fa-pencil'></i></a>
            &nbsp;&nbsp;<a href="?page=AmbulanDataView&hapus=true&data=<?php echo $result['id_rs']; ?>" class="on-default remove-row"><i class='fa fa-trash-o'></i></a></center></td>
              </tr>
                <?php
              }
            ?>
          </tbody>
        </table>
      </div>
</div>