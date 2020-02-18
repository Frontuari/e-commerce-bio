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
	
	<style>.cls-1{fill:#ccc;}</style>
	@yield('css')
</head>

<body>

<main id="app">
	<header-menu :userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}"></header-menu>