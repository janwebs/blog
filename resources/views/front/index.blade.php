@extends('front.template.main')

@section('title','Blog')

@section('content')
	<h2>Blog Laravel</h1>
	<a href="{{ route('admin.index') }}" class="btn btn-success">Entrar</a>
	<hr>
	<h3 class="title-font left">{{ trans('app.label_last_articles') }}</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<!-- mostrando los articulos -->
				@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
									@foreach($article->images as $image)
										<img class="img-responsive img-article" src="{{ asset('images/articles/'.$image->name) }}" alt="">
									@endforeach
								</a>
								<a href="{{ route('front.view.article', $article->slug) }}">
									<h3>{{ $article->title }}</h3>
								</a>
								Por: {{ $article->user->name }}
								<hr>
								<i class="fa fa-folder-open-o"></i> 
								<a href="{{ route('front.search.category', $article->category->name) }}">
									{{ $article->category->name }}
								</a>
								<div class="pull-right">
									<i class="fa fa-clock-o"></i> <a href="">{{ $article->created_at->diffForHumans() }}</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4 aside">
			@include('front.template.partials.aside')
		</div>
	</div>
	
@endsection