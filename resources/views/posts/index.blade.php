@extends('base')

@section('content')
	@forelse($posts as $post)
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->content }}</p>
		@include('components.btn-grp')
	@empty
		<h1>{{ $posts->title }}</h1>
		<p>{{ $posts->content }}</p>
		@include('components.btn-grp')
	@endforelse

@endsection
