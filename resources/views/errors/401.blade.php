<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Acceso restringido</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('libraries/bootstrap/css/bootstrap.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<style>
	        html, body {
	            height: 100%;
	        }

	        body {
	            margin: 0;
	            padding: 0;
	            width: 100%;
	            /*color: #B0BEC5;*/
	            display: table;
	            font-weight: 100;
	            font-family: 'Lato';
	        }

	        .container {
	            text-align: center;
	            display: table-cell;
	            vertical-align: middle;
	        }

	        .content {
	            text-align: center;
	            /*display: inline-block;*/
	        }

	        .title {
	            font-size: 72px;
	            margin-bottom: 40px;
	        }
	        .url {
	            font-size: 50px;
	            margin-bottom: 40px;
	        }
	    </style>
	</head>
	<body>
		<div class="container">
            <div class="content pull-right">
                <div class="title">Error 401 - Acceso Restringido</div>
         	
                <div class="url"><a href="{{ route('front.index') }}">volver al inicio</a></div>
            </div>
        </div>
	</body>
</html>