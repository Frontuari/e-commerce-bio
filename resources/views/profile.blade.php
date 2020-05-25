@extends('partials.base')

@section('title','Perfil')

@section('body')


<?php
if(isset($_GET['orders_id'])){

?>

<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>Carrito de Compras</h1>
			</div>

		</div>
	</section>
	<div class="container">
	<div class="row" style="text-align:center;" id="div_image_top">
				<img style="margin:0 auto" src="img/topPagar.png">
	</div>
	</DIV>
	<div class="container">
		<div class="row">
			<div class="col-md-8" id="div_completo_metodo_pago">
				<div class="row">
                    <div class="col-md-12 text-center h4" style="color:#67BE5A">Métodos de pago</div>
				</div>
				<div class="row">
                    <div class="col-md-12"><span class="text-danger">Importante:</span><br><span class="text-danger">*</span> Puede realizar un máximo de 2 pagos<br><span class="text-danger">*</span> Si va a pagar en efectivo combinado con otro método de pago, debe elegir primero el método de pago en Efectivo.</div>
				</div>
				<div id="metodosPago"></div>
			</div>
			<div class="col-md-4 text-center">
				<script>var orders_id=<?php echo $_GET['orders_id']; ?></script>
				<div id="factura"></div>
			</div>
		
		</div>
	</div>
<?php


}else{
	?>
		<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>Mi Cuenta</h1>
			</div>
		</div>
	</section>
	<profile :tasadolar="{{$tasa_dolar}}" :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></profile>
	<?php
}
?>

@stop