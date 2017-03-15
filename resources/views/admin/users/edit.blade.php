@extends('admin.template.main')

@section('title','Editar usuario '.$user->name)

@section('content')

	{!! Form::open(['route'=>['admin.users.update', $user], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'p.e. example@domain.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', [''=>'Seleccione tipo', 'member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
		</div> 
	{!!	Form::close() !!}
@endsection