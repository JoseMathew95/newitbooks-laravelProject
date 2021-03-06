@extends('layouts.app')
@section('content')


<main class="container-fluid">
	<article>
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>{{ $blog->title }}</h1><a href="{{ action('BlogController@edit', [$blog->id]) }}">Edit</a>
			</div>
		</div>

		<div class="col-md-12 col-md-offset-2">
			<p>{{$blog->body}}</p>

			<?php foreach ($blog->category as $key => $category): ?>
				<p><a href="{{ route('categories.show', $category->slug) }}">{{$category->name}}</a></p>
			<?php endforeach ?>
		</div>
	</article>
</main>

	


@endsection