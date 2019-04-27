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
            
                <h2 class="panel-title">Data Kantor Polisi</h2>
              </header>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-md">
                      <p><strong>Kelola Data Lokasi   </strong>&nbsp<a href="?page=KanpolDataView&aksi=tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>&nbsp<a href="?page=KanpolView" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a></p>
                    </div>
                  </div>
                </div>

<div class="col-md-12">
  <div class="row">
   <?php 
    if ($_GET['page'] == 'KanpolDataView' && isset($_GET['hapus']) == 'true' && !empty($_GET['data']) ) {
     try {
      $delete = $konfigurasi->hapus('tb_kanpol','id_kanpol',$_GET['data']);
      if ($delete) {
       echo "<script>alert('Data Lokasi Berhasil Dihapus');window.location.href = '?page=KanpolDataView'</script>";
      }
     }
     catch (PDOException $e) {
      echo $e->getMessage();
     }
    }
    else if ($_GET['page'] == 'KanpolDataView' && isset($_GET['aksi']) == 'tambah' && empty($_GET['data'])) {
     if (isset($_POST['simpan'])) {
      try {
       $insert = $konfigurasi->tambah('tb_kanpol',$_POST['id_kanpol'],$_POST['jenis_kanpol'],$_POST['nama_kanpol'],$_POST['alamat_kanpol'],$_POST['telp_kanpol'],$_POST['lat'],$_POST['lng'],$_POST['location_status']);
       if ($insert) {
        echo "<script>alert('Data Lokasi Berhasil Disimpan');window.location.href = '?page=KanpolDataView'</script>";
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
        <input type="text" placeholder="ID Kanpol" name="id_kanpol" id="id_kanpol" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <select class="form-control" name="jenis_kanpol" id="jenis_kanpol">
         <option>Polresta</option>
         <option>Polres</option>
         <option>Polsekta</option>
         <option>Polsek</option>
         <option>Polwil</option>
        </select>
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Nama Kantor" name="nama_kanpol" id="nama_kanpol" class="form-control">
       </div>
      </div>
      
      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Alamat" name="alamat_kanpol" id="alamat_kanpol" class="form-control">
       </div>
      </div>

      <div class="form-group">
       <div class="col-md-12">
        <input type="text" placeholder="Telepon" name="telp_kanpol" id="telp_kanpol" class="form-control">
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
      <a href="?page=KanpolDataView" class="btn btn-warning">BATAL</a></div>
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
   else if ($_GET['page'] == 'KanpolDataView' && isset($_GET['aksi']) == 'edit' && !empty($_GET['data'])) {
   $read = $konfigurasi->tampilBerdasarkanData('tb_kanpol','id_kanpol',$_GET['data']);
   $result = $read->fetch();
   if (isset($_POST['ubah'])) {
    try {
     $update = $konfigurasi->ubah('tb_kanpol' , $_POST['jenis_kanpol'], $_POST['nama_kanpol'],$_POST['alamat_kanpol'],$_POST['telp_kanpol'],$_POST['lat'],$_POST['lng'],$_POST['location_status'],'id_kanpol',$_GET['data']);
     if ($update) {
      echo "<script>alert('Data Lokasi Berhasil Diubah');window.location.href = '?page=KanpolDataView'</script>";
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
          <input type="text" placeholder="ID Kantor" name="id_kanpol" id="id_kanpol" class="form-control" value="<?php echo $result['id_kanpol']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <select class="form-control" name="jenis_kanpol">
          <?php
          if ($result['jenis_kanpol'] == "Polresta") {
           echo "
           <option selected>Polresta</option>
           <option>Polres</option>
           <option>Polsekta</option>
           <option>Polsek</option>
           <option>Polwil</option>
           ";
          }
          else if ($result['jenis_kanpol'] == "Polres") {
           echo "
           <option>Polresta</option>
           <option selected>Polres</option>
           <option>Polsekta</option>
           <option>Polsek</option>
           <option>Polwil</option>
          ";
          }
          else if ($result['jenis_kanpol'] == "Polsekta") {
           echo "
           <option>Polresta</option>
           <option>Polres</option>
           <option selected>Polsekta</option>
           <option>Polsek</option>
           <option>Polwil</option>
          ";
          }
          else if ($result['jenis_kanpol'] == "Polsek") {
           echo "
           <option>Polresta</option>
           <option>Polres</option>
           <option>Polsekta</option>
           <option selected>Polsek</option>
           <option>Polwil</option>
          ";
          }
          else if ($result['jenis_kanpol'] == "Polwil") {
           echo "
           <option>Polresta</option>
           <option>Polres</option>
           <option>Polsekta</option>
           <option>Polsek</option>
           <option selected>Polwil</option>
          ";
          }
          ?>
          </select>
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Nama Kantor" name="nama_kanpol" id="nama_kanpol" class="form-control" value="<?php echo $result['nama_kanpol']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Alamat" name="alamat_kanpol" id="alamat_kanpol" class="form-control" value="<?php echo $result['alamat_kanpol']; ?>">
         </div>
        </div>

        <div class="form-group">
         <div class="col-md-12">
          <input type="text" placeholder="Telepon" name="telp_kanpol" id="telp_kanpol" class="form-control" value="<?php echo $result['telp_kanpol']; ?>">
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
        <a href="?page=KanpolDataView" class="btn btn-warning">BATAL</a>
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
     <table class="display table table-bordered table-striped mb-none" id="tbKanpol">
      <thead>
       <th width="2%"><center>No</center></th>
       <th width="2%"><center>ID</center></th>
       <th width="5%"><center>Jenis</center></th>
       <th width="10%"><center>Nama Kantor</center></th>
       <th width="20%"><center>Alamat</center></th>
       <th width="10%"><center>Telepon</center></th>
       <th width="5%"><center>Latitude</center></th>
       <th width="5%"><center>Longitude</center></th>
       <th width="5"><center>Status Lokasi</center></th>
       <th width="30%"><center>Aksi</center></th>
      </thead>
          <tbody>
          <?php
          $read = $konfigurasi->tampil('tb_kanpol','id_kanpol');
          $no = 1;
          while ($result = $read->fetch()) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php  echo $result['id_kanpol'];?></td>
                <td><?php  echo $result['jenis_kanpol'];?></td>
                <td><?php  echo $result['nama_kanpol'];?></td>
                <td><?php  echo $result['alamat_kanpol'];?></td>
                <td><?php  echo $result['telp_kanpol'];?></td>
                <td><?php  echo $result['lat'];?></td>
                <td><?php  echo $result['lng'];?></td>
                <td><center><?php  echo $result['location_status'];?><center></td>
                <td>&nbsp;&nbsp;&nbsp;<a href="?page=KanpolDataView&aksi=edit&data=<?php echo $result['id_kanpol']; ?>" class="btn btn-info"><i class='fa fa-pencil'></i></a>
            &nbsp;<a href="?page=KanpolDataView&hapus=true&data=<?php echo $result['id_kanpol']; ?>" class="btn btn-danger"><i class='fa fa-trash-o'></i></a></td>
              </tr>
                <?php
              }
            ?>
          </tbody>
        </table>
      </div>
</div>