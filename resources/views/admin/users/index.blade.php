@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-success btn-xs pull-right">Nuevo Usuario</a>
	<br>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo Electrónico</th>
			<th>Tipo</th>
			<th>Acción</th>
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
					<a href="" class="btn btn-primary btn-xs">Ver</a>
					<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-xs">Editar</a>
					<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar el usuario {{ $user->name }}?')">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $users->render() !!}
@endsection