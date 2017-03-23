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
			{!! Form::textarea('content', null, ['class' => 'form-control textarea-content', 'placeholder' => 'Ingrese contenido del articulo', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category','placeholder' => 'Seleccione una categoria...', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tags', 'multiple']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Image', 'Imagen') !!}
			{!! Form::file('image', ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
		</div> 
	{!!	Form::close() !!}
@endsection
@section('js')	
	<script>
		/* control category*/
		$('.select-category').chosen({
			no_results_text: 'no hay coincidencias'
		});
		/*control tag*/
		$('.select-tags').chosen({
			placeholder_text_multiple: 'Seleccione un tag...',
			no_results_text: 'no hay tags con ese nombre'			
		});
		// incorporando trumbowyg
		$('.textarea-content').trumbowyg({
			lang: 'es'
		});
	</script>
@endsection	