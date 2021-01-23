@extends('partials.base')

@section('title','Cart')

@section('body')

<!--MAIN-->
<main id="app">
	<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.png');">
		<div class="container">
			<div class="text-center">
				<h1>Carrito de Compras</h1>
			</div>
		</div>
	</section>

	<cart 
		:peso_max="{{$peso}}"
		:delivery="{{$delivery}}" 
		:tasadolar="{{$tasa_dolar}}" 
		:userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}">
	</cart>

	<div id="MegaSoftOverlay" class="overlay">

		<!-- Overlay content -->
		<div class="overlay-content">
			<a href="#">PROCESANDO PAGO....</a>
		</div>

	</div>

</main>
<!-- CIERRE DEL MAIN-->
@stop

@section('js')
<script type="text/javascript">
	window.onload = function() {
		setInterval('actualizarStore()',10000);
		actualizarStore();
	}
</script>
@stop
