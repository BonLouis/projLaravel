@extends('base')

@section('content')

	<h1>Ajouter un article</h1>
		
	{!! Form::open(['url' => route('news.store'), 'method' => 'post']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Titre de l\'article') !!}
			{!! Form::text('title', '', ['placeholder' => 'Votre titre...', 'id' => 'title', 'class' => 'form-control']) !!}
			{!! Form::label('content', 'Contenu de l\'article') !!}
			{!! Form::textarea('content', '', ['placeholder' => 'Texte...', 'id' => 'content', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection