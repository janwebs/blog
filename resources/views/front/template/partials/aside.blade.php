
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('app.label_categories') }}</h3>
	</div>
	<div class="panel-body">
		@foreach($categories as $category)
			<ul class="list-group">
				<li class="list-group-item">
					<spam class="badge">{{ $category->articles->count() }}</spam>
					<a href="{{ route('front.search.category', $category->name) }}">
						{{ $category->name }}
					</a>
				</li>
			</ul>
		@endforeach
		
	</div>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('app.label_tags') }}</h3>
	</div>
	<div class="panel-body">
		@foreach($tags as $tag)
			<a href="{{ route('front.search.tag', $tag->name) }}">
				<span class="label label-default">{{ $tag->name }}</span>
			</a>
		@endforeach
	</div>
</div>