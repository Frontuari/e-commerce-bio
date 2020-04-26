<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="assets/img/favicon.png" type="image/x-icon" />	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bree-font.css') }}">
	<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script> -->
	<style>.cls-1{fill:#ccc;}</style>
	<script>
		var min_range, max_range;
	</script>
	@yield('css')
</head>

<body>

<main id="app">
	<header-menu :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></header-menu>