<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Party Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="/css/bootstrap.css">
    
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/css/freeze.css">
{{--     <link rel="stylesheet" href="/css/style.css">
 --}}
    <link rel="stylesheet" href="/css/partyplanner.css">



    <script type="text/javascript" src="/js/modernizr.custom.32033.js"></script>



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
@yield('head')

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
        @include('partials.navbar')


    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

@yield('content')
</body>
@include('partials.footer')

</html>