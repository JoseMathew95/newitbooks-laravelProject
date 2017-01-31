@extends('layouts.app')
@section('content')


<main class="container">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Edit Category </h1>
		</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
		{!! Form::model($category,['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
			<div class="form-group">
				{!! Form::label('name','Name: ') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Edit Category',['class'=> 'btn btn-primary']) !!}
			</div>

    
		{!! Form::close() !!}

		{!! Form::open(['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}
			<div class="form-group">
				{!! Form::submit("Delete Category", ['class' => 'btn btn-danger']) !!}
			</div>
		{!! Form::close() !!}
	</div>

</main>




@endsection