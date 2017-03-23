<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'Default') | Panel de Administracion</title>
		<link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('libraries/chosen/css/chosen.css') }}">
		<link rel="stylesheet" href="{{ asset('libraries/trumbowyg/ui/trumbowyg.css') }}">
	</head>
	<body>
		
		<div class="container">

			@include('admin.template.partials.nav')

			<section>
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>@yield('title')</strong>
					</div>
					<div class="panel-body">
						@include('flash::message')
						@include('admin.template.partials.errors')
						@yield('content')
					</div>
				</div>
			</section>	

			@include('admin.template.partials.footer')	

		</div>

		<script src="{{ asset('libraries/jquery/js/jquery.js') }}"></script>
		<!-- librerias para bootstrap -->
		<script src="{{ asset('libraries/bootstrap/js/bootstrap.js') }}"></script>
		<!-- librerias para seleccion multiple -->
		<script src="{{ asset('libraries/chosen/js/chosen.jquery.js') }}"></script>
		<!-- librerias para editor de texto -->
		<script src="{{ asset('libraries/trumbowyg/trumbowyg.js') }}"></script>
		<!-- librerias para lenguaje espeñol del editor de texto -->
		<script src="{{ asset('libraries/trumbowyg/langs/es.min.js') }}"></script>

		@yield('js')

	</body>
</html>