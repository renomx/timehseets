<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Time Sheets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css">
        
    </head>
    <body>        
        @section('navigation')               

            <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Timesheets</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                                   
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect waves-light" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink-3">
                                <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul> 
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect waves-light" href="#">
                                <i class="fa fa-envelope"></i> Contact
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">
                                <i class="fa fa-gear"></i> Settings</a>
                        </li>
                        <li class="nav-item dropdown show">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-user"></i> Profile </a>
                            @if (Route::has('login'))
                                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                    @auth
                                        <a class="dropdown-item waves-effect waves-light" href="{{ route('login') }}">My Account</a>
                                    @else
                                        <a class="dropdown-item waves-effect waves-light" href="{{ route('login') }}">Log in</a>
                                        <a class="dropdown-item waves-effect waves-light" href="{{ route('register') }}">Register</a>
                                    @endauth
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>


        @show
        <br/><br/>
        <div class="container fluid">            
            <div class="content">
                @yield('content')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
    </body>
</html>
