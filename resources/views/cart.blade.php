@extends('partials.base')

@section('title','Cart')

@section('body')

<!--MAIN-->
<main id="app">
	<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>Carrito de Compras</h1>
			</div>
		</div>
	</section>
	<cart :tasadolar="{{$tasa_dolar}}" :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></cart>
</main>
<!-- CIERRE DEL MAIN-->
@stop

