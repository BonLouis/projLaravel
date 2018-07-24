@extends('base')

@section('content')
	<h1>Greate  !</h1>
		
	<p>
		<a class="btn btn-primary" href="{{ action('LinksController@show', ['id' => $link->id]) }}">
			{{ route('link.show', $link) }}
		</a>
	</p>
@endsection

@section('sidebar')
@endsection