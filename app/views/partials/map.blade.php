<!DOCTYPE html>

<html>

<head>
    <title>http://planner.dev/*</title>

    <style type="text/css">
        #map{
            height: 500px;
            width: 500px;
        }
    </style>

</head>


<p>




</p>



{{-- $address = Get::address

var adress = $address --}}

<body>
<h1>Here's the map page</h1>

<div id="map" ></div>

{{-- Need to change key, Location and getElementById --}}

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfixW9mRbDZRsuVyCOlYkNAbG9O46IILs"></script>

    <script>
        var address = "<?php echo $parties->address ?>";
        
        // Geocoder.geocode(address);
        console.log(address);

        var initialLocation;
        var sanantonio = new google.maps.LatLng(29.424122, -98.493628);
        var browserSupportFlag =  new Boolean();

        function initialize() {
          var myOptions = {
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map"), myOptions);

          if(navigator.geolocation) {
            browserSupportFlag = true;
            navigator.geolocation.getCurrentPosition(function(position) {
              initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
              map.setCenter(initialLocation);
              var marker = new google.maps.Marker({
                  position: initialLocation,
                  map: map,
                  animation: google.maps.Animation.DROP
                });
            }, function() {
              handleNoGeolocation(browserSupportFlag);
            });
          }
          else {
            browserSupportFlag = false;
            handleNoGeolocation(browserSupportFlag);
          }

          function handleNoGeolocation(errorFlag) {
            if (errorFlag == true) {
              alert("Geolocation service failed.");
              initialLocation = sanantonio;
              var marker = new google.maps.Marker({
                  position: initialLocation,
                  map: map
                });
            } else {
              alert("Your browser doesn't support geolocation. We've placed you in San Antonio.");
              initialLocation = sanantonio;
              var marker = new google.maps.Marker({
                  position: initialLocation,
                  map: map
                });
            }
            map.setCenter(initialLocation);
          }
        }
        initialize();
    </script>

</body>
</html>

