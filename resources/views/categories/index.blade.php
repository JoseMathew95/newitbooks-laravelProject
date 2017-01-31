@extends('layouts.app')
@section('content')


<main class="container">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>List of Category </h1>
		</div>
	</div>

	<?php foreach ($categories as $key => $category): ?>

		
		@if ($category->blog->count() > 0)
			<a href="{{ route('categories.show', $category->slug) }} "> {{ $category->name }} </a>
		@endif

	<?php endforeach ?>

</main>




@endsection