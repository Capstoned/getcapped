<!DOCTYPE <html>
<head>
    <title>User Dashboard</title>

    <meta charset="UTF-8">
    <title>Party Planner</title>
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
                            <li><a href="/theme">Home</a>
                            </li>
                            @if(!Auth::check())
                                <li><a class="getApp" href="#getApp">Sign Up</a>
                                </li>
                            @elseif(Auth::check())
                                <li><a href="#logout">Logout</a></li>
                            @endif
                            <li><a href="/theme#support">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>

    <div class="dash-header">
        <img src="/img/freeze/bk-freeze.jpg">
    </div>
</body>
</html>