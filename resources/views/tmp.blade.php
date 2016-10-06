<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Laravel
        </title>
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
            </script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js">
            </script>
        <![endif]-->
            <!-- Bootstrap core CSS     -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="{{asset('/assets/css/animate.min.css')}}" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
                <!-- you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text">
                            Creative Tim
                        </a>
                    </div>
                    <ul class="nav">
                        <li>
                            <a href={{url('test')}}>
                                <i class="pe-7s-graph">
                                </i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="user.html">
                                <i class="pe-7s-user">
                                </i>
                                <p>
                                    User Profile
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="pe-7s-note2">
                                </i>
                                <p>
                                    Table List
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html">
                                <i class="pe-7s-news-paper">
                                </i>
                                <p>
                                    Typography
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="icons.html">
                                <i class="pe-7s-science">
                                </i>
                                <p>
                                    Icons
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="maps.html">
                                <i class="pe-7s-map-marker">
                                </i>
                                <p>
                                    Maps
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="notifications.html">
                                <i class="pe-7s-bell">
                                </i>
                                <p>
                                    Notifications
                                </p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="upgrade.html">
                                <i class="pe-7s-rocket">
                                </i>
                                <p>
                                    Upgrade to PRO
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">
                                    Toggle navigation
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                            </button>
                            <a class="navbar-brand" href="#">
                                Profile
                            </a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-dashboard">
                                        </i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-globe">
                                        </i>
                                        <b class="caret">
                                        </b>
                                        <span class="notification">
                                            5
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Notification 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Notification 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Notification 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Notification 4
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Another notification
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-search">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="">
                                        Account
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Dropdown
                                        <b class="caret">
                                        </b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Action
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Another action
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Something
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Another action
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Something
                                            </a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">
                                                Separated link
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        Log out
                                    </a>
                                </li>

                                @if (Auth::guest())
						<li><a href="{{url('/auth/login')}}">Login</a></li>
						<li><a href="{{url('/auth/register')}}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{url('/auth/logout')}}">Logout</a></li>
							</ul>
						</li>
					@endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                          @yield('content')
                     
                            </div>
                        </div>
                    </div>
                 <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                Home
                            </a>
                            </li>
                            <li>
                                <a href="#">
                                Company
                            </a>
                            </li>
                            <li>
                                <a href="#">
                                Portfolio
                            </a>
                            </li>
                            <li>
                                <a href="#">
                               Blog
                            </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
            </div>
        </div>
        <!-- Scripts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js">
        </script>
<!--   Core JS Files   -->
<script src="{{asset('/assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{asset('/assets/js/bootstrap-checkbox-radio-switch.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('/assets/js/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('/assets/js/light-bootstrap-dashboard.js')}}"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('/assets/js/demo.js')}}"></script>

    </body>
</html>
