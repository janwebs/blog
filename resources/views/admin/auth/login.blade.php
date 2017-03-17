@extends('admin.template.main')

@section('title','Login')

@section('content')
	{!! Form::open(['route'=>'admin.auth.login','method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'p.e. example@domain.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******', 'required']) !!}
		</div> 
		<div class="form-group">
			{!! Form::submit('Acceder', ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close('') !!}
@endsection