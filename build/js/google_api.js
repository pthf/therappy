//API de Google Maps

var myCenter=new google.maps.LatLng(20.6820281,-103.401426,17);

function initialize() {
  var mapProp = {
    center: myCenter,
    zoom:15,
    scrollwheel: false,
    zoomControl: false,
    scaleControl: false,
    scrollwheel: false,
    draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker=new google.maps.Marker({
  	position:myCenter,
  });

  marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
