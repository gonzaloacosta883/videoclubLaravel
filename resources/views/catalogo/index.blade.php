
{{-- @extends('layouts.app') --}}
	@extends('layout.master')
		@section ('menu')
	@parent
		<p>Listado de catalogo</p>
		<div class="row">

			 {{-- @foreach($movies as $key => $item) --}
			 {{-- <div class="col-xs-6 col-sm-4 col-md-3 text-center"> --}}
			 {{-- <a href="{{ url('/catalogo/show/' . $key) }}"> --}
			 {{-- <img src="{{$item['poster']}}" style="height:200px"/> --}}
			 {{-- <h4 style="min-height:45px;margin:5px 0 10px 0"> --}}
			 {{-- $item['title']}} --}}
			 {{-- </h4> --}}
			 {{-- </a> --}}
			 {{-- </div> --}}
			 {{-- Nuevo Codigo --}}

			 		@foreach($movies as $item)
					 <div class="col-xs-6 col-sm-4 col-md-3 text-center">
					 <a href="{{ url('/catalogo/show/' . $item['id'] ) }}">
					 <img src="{{$item['poster']}}" style="height:200px"/>
					 <h4 style="min-height:45px;margin:5px 0 10px 0">
					 {{$item['title']}}
					 </h4>
					 </a>
					 </div>

			 		@endforeach
			</div>
	@endsection

