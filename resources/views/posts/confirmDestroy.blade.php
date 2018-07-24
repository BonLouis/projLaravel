@extends('base')

@section('content')
	<div class="">
		<h3>Êtes-vous certain de vouloir supprimer cet article ?</h3>

		{!! Form::open(['url' => route('news.destroy', $post), 'method' => 'delete']) !!}
			<input type="submit" class="btn btn-primary">
			<a href="{{ route('news.index') }}" class="btn btn-primary">Non, annuler!</a>
		{!! Form::close() !!}
	</div>
@endsection