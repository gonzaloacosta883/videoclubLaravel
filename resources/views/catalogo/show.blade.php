
	@extends('layout.master')
		@section ('menu')
	@parent
		<div class="row">
			 <div class="col-sm-4">
			 	<img src="{{$encontrado->poster}}" style="height:350px"/>
			 </div>
			 <div class="col-sm-8">
			 <h4>{{$encontrado->title}}</h4>
			 <br>
			 	{{-- Datos de la película --}}
			 	{{$encontrado->year}}
			 	<br>
			 	{{$encontrado->director}}
			 	<br>
			 	{{$encontrado->synopsis}}
			 	<br>
			 	<br>
			 		@switch($encontrado->rented)
			 		@case (true)
			 		<strong>Estado: </strong> Pelicula alquilada
			 		<br>
			 		<br>
			 		<a class="btn btn-outline-success" href="{{ action('CatalogoController@Return',$encontrado->id) }}" role="button">Devolver pelicula</a>
			 		@break
			 		@case (false)
			 		<strong>Estado: </strong> Pelicula disponible
			 		<br>
			 		<br>
			 		<a class="btn btn-outline-success" href="{{ action('CatalogoController@Rent',$encontrado->id) }}" role="button">Alquilar pelicula</a>
			 		@break
			 		@endswitch
			 		
			 		<a class="btn btn-outline-warning" href="{{ action('CatalogoController@Edit',$encontrado->id) }}" role="button">Editar</a>
					<a class="btn btn-outline-info" href="{{ action('CatalogoController@Index') }}" role="button"> <strong> < </strong>Volver al listado</a>
					<a class="btn btn-info" href="{{ action('CatalogoController@Create') }}" role="button">Añadir película</a>
					<a class="btn btn-danger" href="{{ action('CatalogoController@Delete',$encontrado->id) }}" role="button">Eliminar película</a>

			 </div>
			</div>
	@endsection
	
