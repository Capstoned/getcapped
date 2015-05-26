<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="fa fa-bars fa-lg"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="/img/freeze/party-glass.png" alt="" class="logo">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/about"><i class="fa fa-glass"></i> about</a>
                            </li>
                            <li><a href="/#reviews"><i class="fa fa-comments"></i> reviews</a>
                            </li>
                            <li><a href="/#features"><i class="fa fa-gift"></i> features</a>
                            </li>
                            @if(!Auth::check())
                                <li><a class="getApp" href="/#getApp"><i class="fa fa-sign-in"></i> sign in</a>
                                </li>
                            @else
                                <li><a href="{{action('UsersController@checkUserType')}}"><i class="fa fa-archive"></i> my account</a></li>
                            @endif
                            @if(Auth::check())
                                <li><a href="{{action('UsersController@logout')}}"><i class="fa fa-sign-out"></i> sign out</a>
                            </li>
                            @endif
                            <li><a href="/#support"><i class="fa fa-envelope"></i> contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
        </nav>