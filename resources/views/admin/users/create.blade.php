@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')

	{!! Form::open(['route'=>'admin.users.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'required']) !!}
		</div>
	{!!	Form::close() !!}

@endsection