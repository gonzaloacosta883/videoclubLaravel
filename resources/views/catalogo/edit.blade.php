
@extends('layouts.app')
		@section ('menu')
	@parent
		<p>Listado de catalogo</p>
	@endsection
	@section('content')
		<p>Editar Pelicula: {{$encontrado->title}}</p>
		{{--Formulario que debe ser modificado--}}
		<form action="{{ action('CatalogoController@Update', $encontrado->id) }}" method="GET">
			{{-- method_field('PUT') --}}
			{{ csrf_field() }}
			Titulo:
				<input type="text" name="title" value="{{ $encontrado->title}}" required>
				<br>
			Año:
				<input type="text" name="year" value="{{ $encontrado->year}}" required>
				<br>
			Director:
				<input type="text" name="director" value="{{ $encontrado->director}}" required>
				<br>
			Poster:
				<input type="text" name="poster" value="{{ $encontrado->poster}}" required>
				<br>
			Synopsis:
				<textarea rows="1" cols="20" name="synopsis" value="{{ $encontrado->synopsis}}" required></textarea>
				<br>
				<input class="btn btn-outline-danger" type="submit" value="Editar">
		</form>
	@endsection
