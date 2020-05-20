@extends('partials.base')

@section('title','Perfil')

@section('body')

	<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>Mi Cuenta</h1>
			</div>
		</div>
	</section>

	<profile :tasadolar="{{$tasa_dolar}}" :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></profile>

@stop