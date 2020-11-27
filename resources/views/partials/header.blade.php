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
	<!--<link rel="stylesheet" type="text/css" href="{{ asset('css/new-styles.css') }}?ver=2.0.4">-->
	
	<style>.cls-1{fill:#ccc;}</style>
	<script>
		var min_range, max_range;
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

	</script>
	@yield('css')
</head>

<body>

<main id="app">
	<header-menu :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></header-menu>
