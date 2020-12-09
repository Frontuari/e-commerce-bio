@extends('partials.base')
@section('title','Catalog')
@section('body')
	<catalog
		:tags="{{ $tags }}"
		:ads_a="{{ $ads_a }}"
		:ads_b="{{ $ads_b }}"
		:ads_c="{{ $ads_c }}"
		:ads_d="{{ $ads_d }}"
		:tasadolar="{{$tasa_dolar}}"
		<?php
			if(isset($_SESSION['usuario']) and !empty($_SESSION['usuario'])){
		?>
		:userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}">
		<?php
			}else{
		?>
		:userlogged="{}">
		<?php
			}
		?>
	</catalog>
@stop

@section('js')
<script src="{{ asset('assets/js/bootstrap-input-number.js') }}"></script>
<script>
	$(document).ready(function(){
		$("input.cart-add-button").inputSpinner();
	});
</script>
@stop