<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bio en casa | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="/assets/img/favicon.png" type="image/x-icon" />	
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}?ver=1.0.8">-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}?ver={{ strtotime(now()) }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bree-font.css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

	<!--<link rel="stylesheet" type="text/css" href="{{ asset('css/new-styles.css') }}?ver=2.0.4">-->
	
	<style>.cls-1{fill:#ccc;}</style>
	<script>
		var min_range, max_range;
		var url_base = "{{ str_replace('http:','https:',url('/')) }}";
		@if(Cookie::get("store_id"))
			var storeName = '{{ Cookie::get("store_name") }}';
			var storeId = '{{ Cookie::get("store_id") }}';
		@else
			var storeName = '';
			var storeId = '';
		@endif

		@if(isset($categoryName) and !empty($categoryName))
			var categoryName = "{{ $categoryName }}";
		@else 
			var categoryName = "";
		@endif

		@if(isset($tagName) and !empty($tagName))
			var tagName = "{{ $tagName }}";
		@else 
			var tagName = "";
		@endif

	</script>
	@yield('css')
</head>

<body>

<main id="app">
	<?php
		if(isset($_SESSION['usuario']) and !empty($_SESSION['usuario'])){
	?>
	<header-menu :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></header-menu>
	<?php
		}else{
	?>
	<header-menu></header-menu>
	<?php
		}
	?>
	
