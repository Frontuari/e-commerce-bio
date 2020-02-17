<?php 
	namespace App\Http\Controllers\API;
	use Illuminate\Http\Request;
	use App\Http\Controllers\API\BaseController as BaseController;
	use App\ProductCategory;
	use Validator;
	use App\Http\Resources\Category as CategoryResource;
?>

@extends('partials.base')
@section('title','Catalog')
@section('body')
@php
	if(isset($_GET['cat'])){
		$category_id = $_GET['cat'];
		$category = ProductCategory::where('id',$category_id)->get();
		$category = json_decode($category);
		$title = $category[0]->name;
	}else{
		$title = 'Catalogo';
    }
@endphp
	<div class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1><?php echo $title; ?></h1>
			</div>
		</div>
	</div>
	<catalog></catalog>


@stop