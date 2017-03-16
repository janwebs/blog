<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
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
	<script src="{{ asset('libraries/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>