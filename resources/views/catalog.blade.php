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
		:userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}">
	</catalog>
@stop

@section('js')
<script src="{{ asset('assets/js/bootstrap-input-number.js') }}"></script>
<script>
	$(document).ready(function(){
		$(".cart-add-button").inputSpinner();
	});
</script>
@stop