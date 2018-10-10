@extends('layouts.master')

@section('content')

	<h1 class="pb-3 mb-4 font-italic border-bottom">{{ $post->title }}</h1>

	<p> {{ $post->body }}</p>

@endsection
