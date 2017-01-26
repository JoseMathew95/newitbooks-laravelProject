@extends('layouts.app')
@section('content')


<main class="container-fluid">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Deleted Blogs</h1>
		</div>
	</div>

	<div class="col-md-12 col-md-offset-2">
		<?php foreach ($deletedBlogs as $blog): ?>

			<article>
				<h2> {{ $blog->title }}</h2>
				<p>{{$blog->body}}</p>
			</article>
			
			{!! Form::open(['method' => 'GET', 'action' => ['BlogController@restore', $blog->id]]) !!}
				<div class="form-group">
					{!! Form::submit("Restore Blog", ['class' => 'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}

			{!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroyBlog', $blog->id]]) !!}
				<div class="form-group">
					{!! Form::submit("Destroy Blog", ['class' => 'btn btn-danger']) !!}
				</div>
			{!! Form::close() !!}

		<?php endforeach ?>
	</div>

</main>

	


@endsection