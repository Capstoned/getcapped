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

  
  </section>
<!-- change from img to background image for this div -->
    <section id="section-one">
<div class="container">
    <div class ="mainbox">

<h1 class="weather-main">Your Events <i class="fa fa-gift"></i></h1>

  @foreach(Auth::user()->parties as $userParty)
    

    <div class="parties">
    
      <h4>Party Type</h4>
      
      {{Party::$partyTypes[$userParty->party_type] }}
      <br>

      <h4>Event Date</h4>
      {{ $userParty->getEventDate($userParty->event_date) }}
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
      <div id="city"></div>
      <h2 class="weather-title">Today's Weather</h2>

      <div id="weather"></div>

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
  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');
  var currentDay = moment().format('DD');
  var eventMonth = '{{substr($userParty->event_date, 0, -12)}}';
  var eventDay = '{{substr($userParty->event_date, 8, -9)}}'
  console.log(eventDay);

  // var partyDate = '{{ $party->event_date }}';
  var events = [
    { date: currentMonth + '-' + currentDay, title: 'Today', location: '' },
    { date: eventMonth + '-' + eventDay, title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '11', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + eventDay,    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
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





