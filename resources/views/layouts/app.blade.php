<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Grinsur</title>
	<meta charset="UTF-8">
	<meta name="author" content="">
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('html/css/bootstrap.min.css') }}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('html/css/bootstrap-theme.min.css') }}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('html/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('html/css/flexslider.css') }}">
	<link rel="stylesheet" href="{{ asset('html/css/select-theme-default.css') }}">
	<link rel="stylesheet" href="{{ asset('html/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('html/css/owl.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('html/css/style.css') }}" type="text/css"/>
</head>
<body id='top' class="{{ $class }}">

	<header>
		<div id="top-strip">
			<div class="container">
				<ul class="pull-right social-icons">
					<li><a href="https://www.linkedin.com/in/miguel-a-olortegui-costa-pn-1169-86106537" target="_blank" class="fa fa-linkedin"></a></li>
					<li><a href="https://www.pinterest.com/grinsur/pins" target="_blank" class="fa fa-pinterest"></a></li>
					<li><a href="https://www.instagram.com/grupoinmobiliariodelsur22" target="_blank" class="fa fa-instagram"></a></li>
					<li><a href="https://twitter.com/GrupoInmobSur" target="_blank" class="fa fa-twitter"></a></li>
					<li><a href="https://www.facebook.com/GRINSUR" target="_blank" class="fa fa-facebook"></a></li>
				</ul>
				<!--div id="login-box" class='pull-right'>
					<a href="#" class='fa fa-user'><span>Login</span></a>
					<a href="#" class='fa fa-pencil'><span>Register</span></a>
				</div-->
			</div>
		</div>
	</header>

	@yield('content')

	<footer>
		<div class="container">
			<div class="col-md-3 footer-about">
				<a class="logo" href="#"><img src="{{ asset('html/img/logo.png') }}" alt="logo"></a>
			</div>
			<div class="col-md-4 footer-newsletter">
				<h3 class='footer-title'>Nosotros</h3>
				<p>
					Somos una empresa inmobiliaria y constructora  en Perú integrada por un equipo de expertos profesionales  capacitados en todas las áreas del rubro, con más de 10 años de experiencia en el mercado, principalmente terrenero en el  sur; desde Lima, Balnearios, Asia, Cañete, Lunahuaná, Chincha, Pisco, Independencia, Humay, Paracas, Ica, Nazca; como en todo el Perú con alianza de las mas prestigiosas inmobiliarias del país.				
				</p>
			</div>
			<div class="col-md-5 footer-contact-info">
				<h3 class='footer-title'>Contacto</h3>
				<p class="website-fax">
					<i class="fa fa-mobile"></i> 994 019 102
				</p><br>
				<p class="website-number">
					<i class="fa fa-mobile"></i> 956 480 123
				</p><br>
				<p class="website-email">
					<i class="fa fa-envelope"></i> grupoinmobiliariodelsur@hotmail.com
				</p>
			</div>
		</div>
	</footer>

	<div class="bottom-strip">
		<div class="container">
			<div class="col-md-4">
				<p class='pull-left'>
					© 2020 Grinsur, All Rights Reserved
				</p>
			</div>
			<div class="col-md-4 bottom-strip-middle">
				<a href="#top" class='fa fa-arrow-circle-up' id='backtop-btn'></a>
			</div>
			<div class="col-md-4">
				<!--ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
				</ul-->
				<p class='pull-right'>
					by <a href="http://vardeveloper.com" target="_blank" class="">vardeveloper.com</a>
				</p>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('html/js/jquery-2.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('html/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('html/js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('html/js/select.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('html/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('html/js/script.js') }}"></script>
	@stack('js')

</body>
</html>