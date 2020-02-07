<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="assets/img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bree-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/multirange.css') }}">
	<style>.cls-1{fill:#ccc;}</style>
	@yield('css')
</head>

<body>
<main id="app">
	<header-menu></header-menu>