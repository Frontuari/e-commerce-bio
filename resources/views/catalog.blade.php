@extends('partials.base')
@section('title','Catalog')
@section('body')
	<div class="jumbotron" style="background-image: url('{{ $portada }}');">
		<div class="container">
			<div class="text-center">
				<h1 style="visibility: hidden">{{ $title }}</h1>
			</div>
		</div>
	</div>
	<catalog

		:tags="{{ $tags }}"
		:ads="{{ $ads }}"
		:tasadolar="{{$tasa_dolar}}"
		:userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}">
	</catalog>
@stop