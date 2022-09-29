<?php
$title="Dashboard";
$judul="Dashboard";
$url='dashboard';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="padding-top:0px;">
<div id="map"></div>
<script>
var mapboxAccessToken = 'pk.eyJ1IjoiYWtyaXN0aWF3YW4iLCJhIjoiY2w4OHp6am90MDJpNzNvbzVubGNtbGtubiJ9.K8_5Bw1k3JPQrhHRfR7Q6g';
var map = L.map('map', {zoomControl: false}).setView([-2, 118.81], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + mapboxAccessToken, {
    id: 'mapbox/light-v10',
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);
L.control.zoom({
    position: 'bottomright'
}).addTo(map);
// marker
<?php
  $getdata=$db->ObjectBuilder()->get('meta_site');
  foreach ($getdata as $row){
    ?>
    L.marker([<?=$row->latitude?>,<?=$row->longitude?>]).addTo(map).bindPopup("ID : <b><?=$row->id_stasiun?></b><br>Nama Stasiun : <?=$row->nama_stasiun?><br>Alamat : <?=$row->alamat?><br>Jenis : <?=$row->jenis?>");
    <?php
  }
  ?>
</script>
</div>
