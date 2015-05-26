<!DOCTYPE html>
<head>
    <title>My Dashboard</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="/css/bootstrap.css">

    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/css/freeze.css">

    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" href="/css/dashboard.css">




<script type="text/javascript" src="js/modernizr.custom.32033.js"></script>
</head>
<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="img/freeze/party-glass.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>
@include('partials.navbar')

<!-- change from img to background image for this div -->
    <section id="section-one">
<div class="container">
    <div class ="mainbox">


  <?php $parties = [] ?>

  @foreach(Auth::user()->parties as $userParty)

    <div class="parties">

      <h4>Party Type</h4>

      {{Party::$partyTypes[$userParty->party_type] }}
      <br>

      <h4>Event Date</h4>
      <p class = "party_date" data = "{{{$userParty->event_date}}}">{{ $userParty->getEventDate($userParty->event_date) }} </p>
      <br>

      <h4>Services Requested</h4>
        <?php $services = $userParty->services; ?>
      @foreach($services as $service)
        {{ $service->description }} <br>
      @endforeach


      <h4>Address</h4>
      {{ $userParty->address }}
      <br>
      {{ $userParty->city }}
      <br>
      {{ $userParty->state }}
      <br>
      {{ $userParty->zip_code }}

      <h4>Comments</h4>
      {{ $userParty->comments }}
      <br>
      <br>
      <a class="btn btn-default" href="{{{ action ('PartiesController@edit', $userParty->id) }}}" role="button">Edit Party</a>
      <br>
    </div>

   <?php $parties[] = $userParty ?>

  @endforeach

  
  </div>
</div>

        <div id="calendar">
        <div id="mini-clndr">
    <script id="calendar-template" type="text/template">
      <div class="controls">
        <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %></div><div class="clndr-next-button">&rsaquo;</div>
      </div>

      <div class="days-container">
        <div class="days">
          <div class="headers">
            <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
          </div>
          <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
        </div>
      </div>
    </script>
    </div>
  </div>
    </section>
<!-- This is the div for the calendar, #mini-clndr -->


    <section id="section-two">
        <h1 class="weather-main">Weather <i class="fa fa-picture-o"></i></h1>
    <div class="container">
      <h3>City</h3>
      <hr>
      <div id="city">

      </div>
      <h2 class="weather-title">Today's Weather</h2>

      <div id="weather"></div>
      <hr>

      <div class ="container-fluid">

          <div class="row">
          <h2 class="weather-title">3 Day Forecast</h2>

              <div id="forecast"></div>


          </div>
        </div>
    </section>

    <section id="section-three">
        <div id="map">
        <!-- This is the div for the map -->
        @include('partials.map')
        </div>
    </section>


        @include('partials.footer')

<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/js/moment.js"></script>
<script src="/js/underscore.js"></script>
<script src="/js/calendar.js"></script>



<script src="/js/js_ajax_weather.js"></script>

<script>

  (function() {

    // ---------------------------------------------------/
    // Zipcode Weather
    // ---------------------------------------------------/
    console.log({{ $party->zip_code }});

    var cityName = $('#city');
    var forecastHtml = '';

    var currentWeather = $.ajax('http://api.openweathermap.org/data/2.5/weather?q=' + {{ $party->zip_code }} + '&APPID=7511d6aa040231db8c1b8f06b764d188');

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

    var forecastWeather = $.ajax('http://api.openweathermap.org/data/2.5/forecast/daily?' + {{ $party->zip_code }} + '&cnt=3&mode=json&APPID=7511d6aa040231db8c1b8f06b764d188');

    forecastWeather.done(function(data) {

      $(data.list).each(function(index, element) {

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

    });

    currentWeather.fail(function() {
      console.log('500, error connecting to openweathermap API');
    });

    forecastWeather.fail(function() {
      console.log('Error Connecting to openweathermap forecast API');
    });

})();


// ---------------------------------------------------/
// Calendar
// ---------------------------------------------------/

  var currentMonth = moment().format('YYYY-MM');
  var currentDay = moment().format('DD');
  var eventMonth = '{{substr($userParty->event_date, 0, -12)}}';
  var eventDay = '{{substr($userParty->event_date, 8, -9)}}';

  var events = [
    { date: currentMonth + '-' + currentDay, title: 'Today', location: '' },
    { date: eventMonth + '-' + eventDay, title: 'Party', location: '' },
  ];

$('#mini-clndr').clndr({
    template: $('#calendar-template').html(),
    events: events,
    clickEvents: {
      click: function(target) {
        if(target.events.length) {
          var daysContainer = $('#mini-clndr').find('.days-container');
          daysContainer.toggleClass('show-events', true);
          $('#mini-clndr').find('.x-button').click( function() {
            daysContainer.toggleClass('show-events', false);
          });
        }
      }
    },
    adjacentDaysChangeMonth: true
  });
  </script>

</body>
</html>





