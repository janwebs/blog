@extends('front.template.main')

@section('title','$article->title')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<h3 class="title-front left">{{ $article->title }}</h3>
				<hr>
				{!! $article->content !!}
				<hr>
				Por: {{ $article->user->name }}
				<i class="fa fa-folder-open-o"></i> 
				<a href="{{ route('front.search.category', $article->category->name) }}">
					{{ $article->category->name }}
				</a>
				<div class="pull-right">
					<i class="fa fa-clock-o"></i> <a href="">{{ $article->created_at->diffForHumans() }}</a>
				</div>
				<br>
				<br>
				<div class="pull-left">
					@foreach($article->tags as $tag)
						<a href="{{ route('front.search.tag', $tag->name) }}">
							<span class="label label-default">{{ $tag->name }}</span>
						</a>
					@endforeach
				</div>
				<br>
				<hr>
				<h3>Comentarios</h3>
				<hr>
				<!-- aqui se injecta DISQUS para implementar comentarios de articulos -->
				<div id="disqus_thread"></div>
				<script>
					(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://blog-laravel-facilito-1.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
					})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
		</div>
		<!-- FIN de DISCUS -->
		<div class="col-md-3 aside">
			@include('front.template.partials.aside')
		</div>
	</div>
@endsection