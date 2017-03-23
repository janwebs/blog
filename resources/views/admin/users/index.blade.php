@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-success btn-xs pull-right">Nuevo Usuario</a>
	<br>
	<hr>
	<!-- Buscador de Tags -->
	{!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
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
			<th>Correo Electrónico</th>
			<th>Tipo</th>
			<th><div class="text-right">Acción</div></th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if($user->type=="admin")
						<span class="label label-info">Administrador</span>
					@else
						<span class="label label-success">Miembro</span>
					@endif
				</td>
				<td>
					<div class="text-right">
						<a href="" class="btn btn-primary btn-xs">Ver</a>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-xs">Editar</a>
						<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar el usuario {{ $user->name }}?')">Eliminar</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $users->render() !!}
@endsection