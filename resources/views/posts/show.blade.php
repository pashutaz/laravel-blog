@extends('layouts.master')

@section('content')

	<h1 class="pb-3 mb-4  border-bottom">{{ $post->title }}</h1>

	<p> {{ $post->body }}</p>
	
	{{-- <hr> --}}

	<div class="comments">
		<h4 class="pb-3 mb-4 font-italic border-bottom">Comments</h3>
		<ul class="list-group">
			@foreach ($post->comments as $comment)
				<li class="list-group-item list-group-item-info" style="margin-bottom:10px">
					<strong> {{ $comment->created_at->diffForHumans() }}:&nbsp;</strong>
					{{ $comment->body }}
				</li>
			@endforeach
		</ul>
	</div>


	{{-- Add a comment --}}
	<hr>

	<div class="card">
		<div class="card-body">
			<form action="/posts/{{ $post->id }}/comments" method="POST">
				{{ csrf_field() }}

				<div class="form-group">
					<textarea class="form-control" name="body"  placeholder="Leave your comment here" required></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add comment</button>	
				</div>
			</form>

			@include('components.errors')


		</div>
	</div>

@endsection
