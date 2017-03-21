@extends('admin.template.main')

@section('title','Lista de Articulos')

@section('content')
	<a href="{{ route('admin.articles.create') }}" class="btn btn-success btn-xs pull-right">Nuevo Articulo</a>
	<br>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{ $article->id }}</td>
				<td>{{ $article->title }}</td>
				<td>
					<a href="" class="btn btn-primary btn-xs">Ver</a>
					<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning btn-xs">Editar</a>
					<a href="{{ route('admin.articles.destroy', $article->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar el articulo {{ $article->title }}?')">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $articles->render() !!}
@endsection