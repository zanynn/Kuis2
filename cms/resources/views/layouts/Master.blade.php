<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <link href="{{asset('img/icon.png')}}" rel="shortcut icon"">
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- off-canvas -->
    <link href=" {{asset('css/mobile-menu.css')}}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="content-wrapper">
        <nav class="navbar m-menu navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="#navbar-collapse-1">

                    <ul class="nav-cta hidden-xs">
                        @can('user-display')
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="head-search">
                                        <form role="form">
                                            <!-- Input Group -->
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Type Something">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                    @endcan
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right main-nav">
                        @can('user-display')
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/guide">Guide</a></li>
                        <li><a href="/contact">Contact</a></li>
                        @endcan
                        @can('manage-articles')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Manage <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-header" href="/me"><i class="fa fa-user" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span> Me</a>
                                <a class="dropdown-header" href="/manageabout"><i class="fa fa-pencil" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span> Edit About Page</a>
                                <a class="dropdown-header" href="/manage"><i class="fa fa-cog" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span> Manage Product</a>
                                <a class="dropdown-header" href="/manageuser"><i class="fa fa-users" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span> Manage User</a>
                                <a class="dropdown-header" href="/message"><i class="fa fa-comments-o" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span> Message</a>
                            </div>
                        </li>
                        @endcan
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle nav-test" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span style="display:inline-block; width: 8px;"></span><img class="user-nav" src="{{asset('storage/'.Auth::user()->imageUser)}}"><span style="display:inline-block; width: 8px;"></span></span><span class="caret"></span>
                                <p class="nav-roles">{{ Auth::user()->roles }}</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i><span style="display:inline-block; width: 10px;"></span>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        @endguest
                    </ul>

                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- .container -->
        </nav>

        @yield('content')


        @include('sweetalert::alert')

</body>

</html>