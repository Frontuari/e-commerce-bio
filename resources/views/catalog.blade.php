@extends('partials.base')
@section('title','Catalog')
@section('body')
	<div class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>{{ $title }}</h1>
			</div>
		</div>
	</div>
	<catalog></catalog>
@stop