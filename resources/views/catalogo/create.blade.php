
@extends('layout.master')
		@section ('menu')
	@parent
		<p>Listado de catalogo</p>
	@endsection
	@section('content')
		<p>Crear Pelicula</p>
		{{--Formulario que debe ser modificado--}}
		<form action="{{ action('CatalogoController@Save') }}" method="GET">
			{{-- method_field('PUT') --}}
			{{ csrf_field() }}
			Titulo:
				<input type="text" name="title" required>
				<br>
			Año:
				<input type="text" name="year" required>
				<br>
			Director:
				<input type="text" name="director" required>
				<br>
			Poster:
				<input type="text" name="poster" required>
				<br>
			Synopsis:
				<textarea rows="1" cols="20" name="synopsis" required></textarea>
				<br>
				<input class="btn btn-outline-danger" type="submit" value="Crear">

		</form>
	@endsection

