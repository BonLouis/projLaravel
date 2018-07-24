@extends('base')

@section('content')
	<h1>Éditer l'article</h1>
	{!! Form::open(['url' => route('news.update', $post), 'method' => 'put']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Modifier le titre de l\'article') !!}
			{!! Form::text('title', $post->title, ['placeholder' => 'Votre titre...', 'id' => 'title', 'class' => 'form-control']) !!}
			{!! Form::label('content', 'Modifier le contenu de l\'article') !!}
			{!! Form::textarea('content', $post->content, ['placeholder' => 'Écrivez quelque chose...', 'id' => 'content', 'class' => 'form-control']) !!}
			<label for="online">
				{!! Form::checkbox('online', 1, $post->online) !!}
				Mettre en ligne
			</label>
		</div>
		<div class="form-group">
			{!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection