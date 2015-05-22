
// (function() {
    // var weatherDisplay = $('#weather');
    var cityName = $('#city');
    var forecastHtml = '';

    // var currentWeather = $.ajax('http://api.openweathermap.org/data/2.5/weather?q=' + '95350&APPID=7511d6aa040231db8c1b8f06b764d188');
    var currentWeather;

    function pass_the_zip(zip_code) {
      console.log(zip_code);
      currentWeather = $.ajax('http://api.openweathermap.org/data/2.5/weather?q=' + zip_code + '&APPID=7511d6aa040231db8c1b8f06b764d188');
    

    console.log(currentWeather);

    currentWeather.done(function(data) {
        console.log(data);

        var currentTemp = '<p>' + parseInt((data.main.temp-273.15) * 1.8 + 32) + '°F</p>';
        var icon = '<img src="http://openweathermap.org/img/w/' + data.weather[0].icon + '.png">';
        var windSpeed = '<p>Wind speed: ' + data.wind.speed + '</p>';
        var humidity = '<p>Humidity: ' + data.main.humidity + ' %</p>';
        var pressure = '<p>Pressure: ' + data.main.pressure + ' hpa</p>';

        var weatherToDisplay = currentTemp + icon + windSpeed + humidity + pressure;
        var cityName = '<h2>' + data.name + '</h2>';
        $('#city').html(cityName);
        $('#weather').html(weatherToDisplay);
    });

        var forecastWeather = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=29.423017&lon=-98.48527&cnt=3&mode=json&APPID=7511d6aa040231db8c1b8f06b764d188');
        
        forecastWeather.done(function(data) {
        	// console.log(data);
        	

         $(data.list).each(function(index, element){
        		console.log(element);

            forecastHtml += '<div class="col-md-4"><img src="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">'
    
            forecastHtml += '<p>Day Temp: ' + parseInt((element.temp.day-273.15) * 1.8 + 32) + '°F</p>';

        	forecastHtml += '<p>Evening Temp: ' + parseInt((element.temp.eve-273.15) * 1.8 + 32) + '°F</p>';

            forecastHtml += '<p>' + element.weather[0].main + ": " + element.weather[0].description + '</p>';

        	forecastHtml += '<p>Humidity: ' + element.humidity + ' %</p>';

        	forecastHtml += '<p>Pressure: ' + element.pressure + ' hpa</p></div>';


        	$('#forecast').html(forecastHtml);


        	});
        	

var googleWeather;
// Set our map options
    var mapOptions = {
      // Set the zoom level
      zoom: 5,
      // This sets the center of the map at our location
      center: { lat: 37.6014, lng: 120.9572 }
    };

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    // Add the marker to our existing map
    var marker = new google.maps.Marker({
      position: mapOptions.center,
      draggable: true,
      animation: google.maps.Animation.BOUNCE,
      map: map
    });

    // Get lat and long for our marker position
   // google.maps.event.addListener(marker, 'dragend', function (event) {

   //  console.log(this.getPosition());
   //  googleWeather = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?lat=' + this.getPosition().lat() + '&lon=' + this.getPosition().lon

   // });

    

    


    });

    

    currentWeather.fail(function() {
    	console.log('500, error connecting to openweathermap API');

    });

    forecastWeather.fail(function() {
    	console.log('Error Connecting to openweathermap forecast API');
    });

    // weatherMap.fail(function() {
    //     console.log('Error connecting to google maps api');
    // });


// })();
