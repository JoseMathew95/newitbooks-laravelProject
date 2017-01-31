@extends('layouts.app')
@section('content')


<main class="container">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>{{ $category->name }}</h1><a href="{{ action('CategoryController@edit', [$category->id]) }}">Edit</a>
		</div>
	</div>

	<?php foreach ($category->blog as $key => $blog): ?>

		<h2 class="text-center"><strong>Recent Blogs on  {{ $category->name }} </strong> </h2>
		<hr>
		<h2 class="text-center"><a href="{{ action('BlogController@show', [$blog->id]) }}"> {{ $blog->title }}</a></h2>
		

	<?php endforeach ?>

</main>




@endsection