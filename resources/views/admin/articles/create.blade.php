@extends('admin.template.main')

@section('title','Crear Articulo')

@section('content')

	{!! Form::open(['route'=>'admin.articles.store', 'method'=>'POST', 'files' => true]) !!}
		<div class="form-group">
			{!! Form::label('title', 'Titulo') !!}
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Titulo', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Ingrese contenido del articulo', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tags', 'Tags (seleccione mas de uno con tecla control presionada)') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Image', 'Imagen') !!}
			{!! Form::file('image') !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
		</div> 
	{!!	Form::close() !!}
@endsection