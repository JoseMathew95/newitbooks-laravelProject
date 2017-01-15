@extends('layouts.app')
@section('content')


<main class="container-fluid">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>latest blogs</h1>
		</div>
	</div>

	<div class="col-md-12 col-md-offset-2">
		<?php foreach ($blogs as $blog): ?>
			<h2> <a href="{{ action('BlogController@show',[$blog->id]) }}">
				{{ $blog->title }}</a></h2>
			<p>{{$blog->body}}</p>
		<?php endforeach ?>
	</div>

</main>

	


@endsection