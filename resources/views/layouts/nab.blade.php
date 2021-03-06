<!doctype html>

<html lang="{{ config('app.locale') }}">

      <head>
              <meta charset="utf-8">
              <meta http-equiv="x-ua-compatible" content="ie=edge">
              <title>FotoReto</title>
              <meta name="description" content="">
              <meta name="viewport" content="width=device-width, initial-scale=1">

              <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
              <link rel="stylesheet" href="css/structure/bootstrap.min.css">
              <link rel="stylesheet" href="css/structure/style.css">
              <link rel="stylesheet" href="/css/home/estilos.css">


      </head>
  <body id="color_body">


    <!-- Start Header Section -->
    <header class="main_menu_sec navbar">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="lft_hd">
    					<a href="{{ url('/') }}"><img src="{{ asset('images/fotoreto_logo.png') }}" /></a>
    				</div>
    			</div>
    			<div class="col-md-9">
    					<div class="main_menu">
    						<nav id="nav_menu">
          							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
          						<!--	<span class="icon-bar"></span>
          							<span class="icon-bar"></span>
          							<span class="icon-bar"></span> -->
          							</button>
          						<div id="navbar">
          							<ul>
          								<li><a class="page-scroll" href="{{ url('/') }}">Inicio</a></li>
          							<li><a href="#">Tutoriales <i class="fa fa-angle-down"></i></a>
          							</li>

          							<li><a href="#">Productos<i class="fa fa-angle-down"></i></a>
          							</li>
                          <li><a  href="{{ route('user.contact') }}">Quienes Somos</a></li>
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
    </header>

  <script src="{{ asset('js/app.js') }}"></script>
    <!-- End Header Section -->
