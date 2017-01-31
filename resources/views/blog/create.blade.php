@extends('layouts.app')
@section('content')


<main class="container">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Create blogs </h1>
		</div>
	</div>

	<div class="col-md-10 col-md-offset-1">
		{!! Form::open(['method' => 'POST', 'action' => 'BlogController@store']) !!}
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
				{!! Form::submit('Create a Blog',['class'=> 'btn btn-primary']) !!}
			</div>

    
		{!! Form::close() !!}
	</div>

</main>


<script src="http://code.jquery.com/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
	
	$('#tag_list').select2();

</script>

@endsection


