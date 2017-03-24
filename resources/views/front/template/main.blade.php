<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="{{ asset('images/laravel.png') }}">
		<title>@yield('title', 'Home') | Blog Laravel</title>
		<link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/journal/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('libraries/font-awesome/css/font-awesome.css') }}">
	</head>
	<body>
		<header>
			@include('front.template.partials.header')
		</header>

		<div class="container">
			@yield('content')
			<footer>
				<hr>
				Todos los derechos reservado &copy {{ date('Y') }}
				<div class="pull-right">Janluis Alarcon</div>
			</footer>
		</div>
		<!-- libreria jquery -->
		<script src="{{ asset('libraries/jquery/js/jquery.js') }}"></script>
		<!-- libreria bootstrap -->
		<script src="{{ asset('libraries/bootstrap/js/bootstrap.js') }}"></script>
	</body>
</html>