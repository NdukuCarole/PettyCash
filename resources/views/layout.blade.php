<!DOCTYPE html>
<html>
<head>
    <title>Petty Cash</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }



/*button area*/
.popular-location .single-location{position:relative}
.popular-location .single-location .location-img{border-radius:10px;overflow:hidden;position:relative;z-index:0; margin-left:0px;}
	.popular-location .single-location .location-img::before{position:absolute;width:100%;height:50%;bottom:0;content:"";z-index:1}
	.popular-location .single-location
	.location-img img{width:100%; transform:scale(1);transition:all .5s ease-out 0s}
	.popular-location .single-location .location-details{position:absolute;left:45px;bottom:-9px;-webkit-transition:all .4s ease-out 0s;-moz-transition:all .4s ease-out 0s;-ms-transition:all .4s ease-out 0s;-o-transition:all .4s ease-out 0s;transition:all .4s ease-out 0s}
	.popular-location .single-location .location-details p{color:#fff;font-size:18px;font-weight:500; font-family:serif}
	.popular-location .single-location .location-details
	.location-btn{padding:10px 20px;background:#fff;color:#ff3d1c;border-radius:30px;opacity:0;visibility:hidden}.popular-location .single-location .location-details
	.location-btn:hover{background:#eb566c;color:#fff}.popular-location .single-location .location-details .location-btn i{font-size:10px;padding:0;margin:0;position:relative;left:-3px}
	.single-location:hover .location-img img{transform:scale(1.1)}.single-location:hover .location-details{bottom:36px}.single-location:hover .location-details
	.location-btn{opacity:1;visibility:visible}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>

@yield('content')

</body>
</html>
