@extends('base')

@section('content')
	<h1>{{ $title }}</h1>
	<ul>
	@foreach($numbers as $num)
		<li>Item n°{{ $num }}</li>
	@endforeach
	</ul>
@endsection

@section('sidebar')
	@parent
	<p>Du contenu ajouté depuis l'enfant</p>
@endsection