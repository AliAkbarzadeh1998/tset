

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(36.293947, 59.676239);
  var mapCanvas = document.getElementById("abbas-map");
  var mapOptions = {
      center: myCenter,
      zoom: 18,
      
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var locationMarker = new google.maps.LatLng(36.293420, 59.674211);
  var marker = new google.maps.Marker({
      position:locationMarker,
      animation:google.maps.Animation.DROP,
       icon: new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/icons/yellow-dot.png")
      
  });
  marker.setMap(map);
  var infowindow = new google.maps.InfoWindow({
   content: "فن بیان رسا"
 });
 infowindow.open(map,marker);

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyXIlS4WydQpG4Ss_mDIQh2oKhMoxZZrA&callback=myMap"></script>

