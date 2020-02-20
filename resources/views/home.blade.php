@extends('partials.base')
@section('title','Home')
@section('body')

	<slider></slider>

	<combos></combos>

	<ads></ads>

	<offers></offers>

	<nuestros-productos :tasadolar="{{$tasa_dolar}}" :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></nuestros-productos>

	<footer-ad></footer-ad>
@stop

@section('js')
<script>
	
</script>
@endsection