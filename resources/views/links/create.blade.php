@extends('base')

@section('content')
	<h1>Raccourcir un nouveau lien</h1>
		
	{!! Form::open(['url' => route('link.store'), 'method' => 'post']) !!}
		<div class="form-group">
			{!! Form::label('url', 'Lien à raccourcir') !!}
			{!! Form::text('url', '', ['placeholder' => 'Votre url', 'id' => 'url', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Raccourcir', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection

@section('sidebar')
@endsection