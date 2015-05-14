<!DOCTYPE <html>
<head>
    <title>My Dashboard</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/css/freeze.css">

    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/calendar.css">



    <script type="text/javascript" src="js/modernizr.custom.32033.js"></script>
</head>
<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="img/freeze/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>
   
    <header>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="/theme">
                            <img src="img/freeze/logo.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">Home</a>
                            </li>
                            @if(!Auth::check())
                                <li><a class="getApp" href="#getApp">Sign Up</a>
                                </li>
                            @elseif(Auth::check())
                                <li><a href="#logout">Logout</a></li>
                            @endif
                            <li><a href="/#support">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>
<!-- change from img to background image for this div -->
    <div class="dash-header">
        <img src="/img/freeze/bk-freeze.jpg">
    </div>

<!-- This is the div for the calendar, #mini-clndr -->
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

<div id="weather">
<!-- This is the div for the weather -->
</div>

<div id="map">
<!-- This is the div for the map -->
</div>
@include('partials.footer')

<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/moment.js"></script>
<script src="/js/underscore.js"></script>
<script src="/js/calendar.js"></script>

<script>
var currentMonth = moment().format('YYYY-MM');
var nextMonth    = moment().add('month', 1).format('YYYY-MM');
var events = [
  { date: currentMonth + '-' + '10', title: 'Persian Kitten Auction', location: 'Center for Beautiful Cats' },
  { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
  { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
  { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
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





