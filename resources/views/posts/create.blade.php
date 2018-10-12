@extends('layouts.master')


@section('content')

	<h1>Create a new Post</h1>

	<hr>

	<form method="POST" action="/posts">

		{{ csrf_field() }}

		<div class="form-group">
			<label for="post-title">Post title</label>
			<input type="text" class="form-control" id="post-title" name="post-title" required>
		</div>

		<div class="form-group">
			<label for="post-body">Body</label>
			<textarea class="form-control" id="post-body" rows="3" name="post-body" required></textarea>		
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>	
		</div>
		
		@include('components.errors')
		
	</form>
	
@endsection
