@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-xs  pull-right">Nueva Categoria</a>
	<br>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>
					<a href="" class="btn btn-primary btn-xs">Ver</a>
					<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-xs">Editar</a>
					<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar la categoria {{ $category->name }}?')">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $categories->render() !!}
@endsection