<!doctype html>

<html lang="{{ config('app.locale') }}">

<html class="no-js" lang="">
      <head>
              <meta charset="utf-8">
              <meta http-equiv="x-ua-compatible" content="ie=edge">
              <title>FotoReto</title>
              <meta name="description" content="">
              <meta name="viewport" content="width=device-width, initial-scale=1">

              <link rel="apple-touch-icon" href="apple-touch-icon.png">
              <link rel="stylesheet" href="css/HomeStyle.css"> <!--no delete-->
              	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
      	        <script src="js/respond.min.js"></script> <![endif]-->
              <!-- Place favicon.ico in the root directory -->
      		    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

              <link rel="stylesheet" href="css/structure/bootstrap.min.css">
              <link rel="stylesheet" href="css/structure/font-awesome.min.css">
              <link rel="stylesheet" href="css/structure/responsive.css">
              <link rel="stylesheet" href="css/structure/style.css">


      </head>
  <body>


    <!-- Start Header Section -->
    <header class="main_menu_sec navbar navbar-default navbar-fixed-top">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-12">
    				<div class="lft_hd">
    					<a href="{{ url('/') }}"><img src="{{ asset('images/fotoreto_logo.png') }}"  width=900 height=70/></a>
    				</div>
    			</div>
    			<div class="col-lg-9 col-md-9 col-sm-12">
    				<div class="rgt_hd">
    					<div class="main_menu">
    						<nav id="nav_menu">
    							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    							</button>
    						<div id="navbar">
    							<ul>
    								<li><a class="page-scroll" href="{{ url('/') }}">Inicio</a></li>
    							<li><a href="#">Tutoriales <i class="fa fa-angle-down"></i></a>
    							<ul>
                    <li><a href="#">Tripode</a></li>
                    <li><a href="#">Objetivo</a></li>
                    <li><a href="#">Enfoque</a></li>

                  </ul>
    							</li>

    							<li><a href="#">Productos<i class="fa fa-angle-down"></i></a>
    							<ul>
    								<li><a  href="#">Camaras</a></li>
    								<li><a  href="#">Accesorios</a></li>
    							</ul>
    							</li>
                    <li><a  href="{{ url('/contact') }}">Quienes Somos</a></li>
    								<li><a  href="{{ url('/contract') }}">Contratar</a></li>
                    @if (Route::has('login'))
                      @if (Auth::check())
                        <li><a href="#">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                            <ul>
                                <a href="{{ url('/user') }}">Perfil</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      @else
                        <li><a href="{{ url('/login') }}">Ingresar</a></li>
                        <li><a href="{{ url('/register') }}">Registrarse</a></li>
                      @endif
                    @endif

    							</ul>
    						</div>
    						</nav>
    					</div>

    				</div>
    			</div>
    		</div>
    	</div>
    </header>
    <br> <br> <br> <br> <br>
  <script src="{{ asset('js/app.js') }}"></script>
    <!-- End Header Section -->
