@extends('front.template.main')

@section('title','Blog')

@section('content')
	<h2>Blog Laravel</h1>
	<a href="{{ route('admin.index') }}" class="btn btn-success">Entrar</a>
	<hr>
	<h3 class="title-font left">Ultimos Articulos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<!-- mostrando los articulos -->
				@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" class="thumbnail">
									@foreach($article->images as $image)
										<img class="img-responsive img-article" src="{{ 'images/articles/'.$image->name}}" alt="">
									@endforeach
								</a>
								<h3>{{ $article->title }}</h3>
								Por: {{ $article->user->name }}
								<hr>
								<i class="fa fa-folder-open-o"></i><a href="">{{ $article->category->name }}</a>
								<div class="pull-right">
									<i class="fa fa-clock-o"></i><a href="">Hace 3 minutos</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4 aside">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categorias</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<spam class="badge">14</spam>Noticias
						</li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item">
							<spam class="badge">2</spam>Tendencias
						</li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item">
							<spam class="badge">4</spam>Programacion
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection