

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="img/freeze/logo.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#about">about</a>
                            </li>
                            <li><a href="#features">features</a>
                            </li>
                            <li><a href="#reviews">reviews</a>
                            </li>
                            <li><a href="#screens">dev team</a>
                            </li>
                            @if(!Auth::check())
                                <li><a class="getApp" href="#getApp">Sign Up</a>
                                </li>
                            @else
                                <li><a href="/dashboard"></a>My Account</li>
                            @endif
                            <li><a href="#support">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>