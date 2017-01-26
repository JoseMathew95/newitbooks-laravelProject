@extends('layouts.app')
@section('content')


<main class="container-fluid">
	
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Admin Dashboard</h1>
		</div>
	</div>

	<div class="col-md-12 col-md-offset-2">
		<button class="btn btn-primary link">
			<a style="color:#fff" href="{{ url('/blog/create') }}">Create Blog</a>
		</button>
		<button class="btn btn-danger link">
			<a style="color:#fff" href="{{ url('/blog/bin') }}">Deleted Blog</a>
		</button>
	</div>

</main>

	


@endsection