@extends('layouts.app')
@section('content')


<main class="container">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Edit blog post </h1>
		</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
		{!! Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogController@update', $blog->id]]) !!}
			<div class="form-group">
				{!! Form::label('title','Title: ') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('body','Body: ') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category_id','Category: ') !!}
				{!! Form::select('category_id[]', $category, null, ['id'=> 'tag_list', 'class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Edit Blog',['class'=> 'btn btn-primary']) !!}
			</div>

    	
		{!! Form::close() !!}

		{!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroy', $blog->id]]) !!}
			<div class="form-group">
				{!! Form::submit("Delete Blog", ['class' => 'btn btn-danger']) !!}
			</div>
		{!! Form::close() !!}
	</div>

</main>

@include('partials.select-2-script')

@endsection