@extends('admin.template.main')

@section('title','Lista de Articulos')

@section('content')
	<a href="{{ route('admin.articles.create') }}" class="btn btn-success btn-xs pull-right">Nuevo Articulo</a>
	<br>
	<hr>
	<!-- Buscador de Articulos -->
	{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
  			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Titulo...', 'aria-describedby' => 'search']) !!}
  			<span class="input-group-btn">
        		{!! Form::button('<span class="glyphicon glyphicon-search"></span>', ['type' => 'submit', 'class'=>'btn btn-default']) !!}
      		</span>
			<!-- <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span></span>-->
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador de Articulos -->
	<br>
	<br>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th><div class="text-right">Acción</div></th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>{{ $article->category->name }}</td>
				<td>{{ $article->user->name }}</td>
				<td>
					<div class="text-right">
						<a href="" class="btn btn-primary btn-xs">Ver</a>
						<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning btn-xs">Editar</a>
						<a href="{{ route('admin.articles.destroy', $article->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar el articulo {{ $article->title }}?')">Eliminar</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $articles->render() !!}
@endsection