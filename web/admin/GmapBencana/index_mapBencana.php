<?php
include'locations_modelBencana.php'; 
?>
<!-- start: page -->
					<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Map Bencana Alam</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<a href="?page=BencanaDataView">
                                                &nbsp;&nbsp;&nbsp;&nbsp;<button id="addToTable" class="btn btn-primary">Kelola Data</button></a>
										</div>
									</div>
								</div>

      <div class="col-lg-9">
        <div id="map" style="width:134%; height:490px;"></div>
      </div>


<div id="map"></div>

<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  '../images/ic_bencana.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var loc = {lat: -7.964832, lng: 112.637747};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: loc,
            zoom: 15
        });


        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Lokasi Kamu');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }



        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][7], locations[i][8]),
                map: map,
                icon :   locations[i][9] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][9] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][9]);
                    $("#id_bencana").val(locations[i][0]);
                    $("#nama_pelapor").val(locations[i][1]);
                    $("#telp_pelapor").val(locations[i][2]);
                    $("#alamat_bencana").val(locations[i][3]);
                    $("#jenis_bencana").val(locations[i][4]);
                    $("#keterangan").val(locations[i][5]);
                    $("#tgl_bencana").val(locations[i][6]);
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    } 

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id_bencana = document.getElementById('id_bencana').value;
        var url = '?page=BencanaKonfirmasiMap&confirm_location&id_bencana=' + id_bencana + '&confirmed=' + confirmed ;
        downloadUrl(url, function(data, responseCode) {
            if (responseCode === 200  && data.length > 1) {
                infowindow.close();
                window.location.reload(true);
            }else{
                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
            }
        });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 4) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>

<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <input name="id_bencana" type='hidden' id='id_bencana'/>
            <td><a>Nama Pelapor:</a></td>
            <td><textarea disabled id='nama_pelapor' placeholder='Nama Pelapor'></textarea></td>
        </tr>

        <tr>
            <input name="id_bencana" type='hidden' id='id_bencana'/>
            <td><a>Lokasi Bencana:</a></td>
            <td><textarea disabled id='alamat_bencana' placeholder='Lokasi Bencana'></textarea></td>
        </tr>


        <tr>
            <input name="id_bencana" type='hidden' id='id_bencana'/>
            <td><a>Jenis:</a></td>
            <td><textarea disabled id='jenis_bencana' placeholder='Jenis Bencana'></textarea></td>
        </tr>

        <tr>
            <input name="id_bencana" type='hidden' id='id_bencana'/>
            <td><a>Keterangan:</a></td>
            <td><textarea disabled id='keterangan' placeholder='Keterangan'></textarea></td>
        </tr>

        <tr>
            <input name="id_bencana" type='hidden' id='id_bencana'/>
            <td><a>Waktu Kejadian:</a></td>
            <td><textarea disabled id='tgl_bencana' placeholder='Waktu Kejadian'></textarea></td>
        </tr>
                
        <tr>
            <td><b>Konfirmasi Lokasi ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW-LxWC1ML0a6FbUzgC6ExKfh6xrb8oZM&callback=initMap">
</script>

</div>
</section>
</section>
</div>
<!-- end: page -->
				</section>

</body>
</html>