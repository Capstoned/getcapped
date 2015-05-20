<p>
    {{$party->address}}
    {{$party->city}}
    {{$party->state}}
    {{$party->zip_code}}
</p>

<h1>Here's the map page</h1>

<div id="map" ></div>

<!-- Load the Google Maps API [DON'T FORGET TO USE A KEY] -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfixW9mRbDZRsuVyCOlYkNAbG9O46IILs"></script>

  <!-- Script to show address on map -->

  <script type="text/javascript">

// Render the map
// var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

// GOOD CODE SECTION
    var address = '{{$party->address}}, {{$party->city}}, {{$party->state}}, {{$party->zip_code}}';
    console.log(address);

    var geocoder = new google.maps.Geocoder();
    var latitude;
    var longitude;
    geocoder.geocode( { 'address': address}, function(results, status) {

    // Check for a successful result
    if (status == google.maps.GeocoderStatus.OK) {
        // console.log(results);
        latitude = results[0].geometry.location.A;
        longitude = results[0].geometry.location.F;
    } else {
        // Show an error message with the status if our request fails
        alert("Geocoding was not successful - STATUS: " + status);
    }

    // Set our map options
    var mapOptions = {
      // This sets the center of the map at our location
      // center: results[0].geometry.location,
      center: { lat: latitude, lng: longitude },
      // Set the zoom level
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP,

      };

      map = new google.maps.Map(document.getElementById("map"), mapOptions);
      map.setTilt(45);
      map.setHeading(90);

//  // Render the map
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Create lat and long for our marker position
    var partyMarker = { lat: latitude, lng: longitude };

    //Image for marker
    var image = "/img/balloon.png"

    // Add the marker to our existing map
    var marker = new google.maps.Marker({
      position: partyMarker,
      map: map,
      icon: image,
      animation: google.maps.Animation.DROP,

    });

    // WINDOW
    // Create a new infoWindow object with content
    var infowindow = new google.maps.InfoWindow({
      content: 'Party Location'
    });

// Open the window using our map and marker
infowindow.open(map,marker);

});


    // // Create a new infoWindow object with content
    // var infowindow = new google.maps.InfoWindow({
    //     content: 'Changing the world, one programmer at a time.'
    // });

    // // Open the window using our map and marker
    // infowindow.open(map,marker);

  </script>


