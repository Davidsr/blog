@extends('layouts.master')

@section('content')

<div class="container">
	<h1 class="display-4">Crear un post</h1>
	<hr>
	<form method="post" action="/posts">
		@csrf
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo" placeholder="titulo...">
			<small id="tituloHelp" class="form-text text-muted">Necesitamos un titulo.</small>
		</div>
		<div class="form-group">
			<label for="mensaje">Post</label>
			<textarea class="form-control" name="mensaje" id="mensaje"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Publicar</button>
	</form>
</div>

@endsection('content')