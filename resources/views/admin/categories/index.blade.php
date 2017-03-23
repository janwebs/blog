@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-success btn-xs  pull-right">Nueva Categoria</a>
	<br>
	<hr>
	<!-- Buscador de Articulos -->
	{!! Form::open(['route' => 'admin.categories.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
  			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Nombre...', 'aria-describedby' => 'search']) !!}
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
			<th>Nombre</th>
			<th><div class="text-right">Acción</div></th>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>
					<div class="text-right">
						<a href="" class="btn btn-primary btn-xs">Ver</a>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-xs">Editar</a>
						<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar la categoria {{ $category->name }}?')">Eliminar</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $categories->render() !!}
@endsection