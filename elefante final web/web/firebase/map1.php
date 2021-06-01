<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
echo "location" . $_GET['locationlat'] . " at " . $_GET['locationlong'];
$lat= $_GET['locationlat'];
$lang= $_GET['locationlong'];
?>
        </div>
<script>

var lat = <?php echo $lat; ?> ;
var lang = <?php echo $lang; ?> ;

    
    //name=localStorage.getItem("locationid");
    //
    console.log(name);
</script>  
<div class="container-fluid" style="padding-right: 0px; padding-left:0px;">
  
    
    
    <div>
    
    
    <div id="googleMap" style="width:100%;height:1200px;"></div>
    
    <script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(lat,lang),
      zoom:15,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
   
     
    var pp = new google.maps.LatLng(lat,lang);
        var marker2 = new google.maps.Marker({position:pp,icon:'animated.gif',animation:google.maps.Animation.BOUNCE});
			  marker2.setMap(map);
        var path = "uploads/";
        var imagename = "gsgs";
        var disname = path.concat(imagename);
        var descr = "gsgs";
        var infowindow = new google.maps.InfoWindow({});
        infowindow.open(map,marker2);










   
}
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBheNEtrngM3cbowGS3tLPwoBXlswmmSb0&callback=myMap"></script>
    
    </div>
    
    
    
    
    
    
    </div>
    
    </bod>
</html>