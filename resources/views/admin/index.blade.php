@extends('admin.template.main')

@section('title','Blog')

@section('content')
	<h1>Bienvenido</h1>
	<a href="{{ route('admin.articles.index') }}">Articulos</a> | <a href="{{ route('admin.categories.index') }}">Categorias</a> | <a href="{{ route('admin.tags.index') }}">Tags</a>
@endsection