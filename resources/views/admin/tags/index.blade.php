@extends('admin.template.main')

@section('title','Lista de Tags')

@section('content')
	<a href="{{ route('admin.tags.create') }}" class="btn btn-success btn-xs pull-right">Nuevo Tag</a>
	<br>
	<hr>
	<!-- Buscador de Tags -->
	{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
  			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Nombre...', 'aria-describedby' => 'search']) !!}
  			<span class="input-group-btn">
        		{!! Form::button('<span class="glyphicon glyphicon-search"></span>', ['type' => 'submit', 'class'=>'btn btn-default']) !!}
      		</span>
			<!-- <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span></span>-->
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador de Tags -->
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
			@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>
				<td>
					<div class="text-right">
						<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning btn-xs">Editar</a>
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar el tag {{ $tag->name }}?')">Eliminar</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $tags->render() !!}
@endsection