<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
</head>
<body>

	@include('admin.template.partials.nav')

	<section>
		@yield('content')
	</section>	

	<script src="{{ asset('libraries/jquery/js/jquery.js') }}"></script>
	<script src="{{ asset('libraries/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>