<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bio Mercados</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="assets/img/favicon.svg" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bree-font.css') }}">

</head>
<body>
	
		<header>
		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="top-info">
							<a href="mailto:contacto@biomercado.com">contacto@biomercado.com</a>
							<a href="tel:584241234567">+58 424 123 4567</a>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="social-nav">
							<li><a href="#"><img src="assets/img/icono-facebook-bio.svg" alt="Facebook"></a></li>
							<li><a href="#"><img src="assets/img/icono-instagram-bio.svg" alt="Instagram"></a></li>
							<li><a href="#"><img src="assets/img/icono-twitter-bio.svg" alt="Twitter"></a></li>
							<li><a href="#"><img src="assets/img/icono-linkedin-bio.svg" alt="LinkedIn"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-header">
			<div class="container">
				<div class="row align-items-center-md">
					<div id="toggler-header" class="col-4">
						<button class="navbar-toggler toggle-menu" type="button">
							<img src="assets/img/menu-movil-bio.svg" alt="Menu Bars">
						</button>
					</div>
					<div id="search-header" class="col-lg-5 col-md-12">
						<form class="form-inline" action="">
							<input class="form-control" type="search" placeholder="Busca aquí..." aria-label="Search">
							<button class="btn btn-search" type="submit"><img src="assets/img/icono-busqueda-bio.svg"></button>
						</form>
					</div>
					<div id="brand-header" class="col-lg-2 col-4">
						<a class="navbar-brand" href="#"><img src="assets/img/logo-bio-mercados-blanco.svg" alt="Bio Mercados"></a>
					</div>
					<div id="nav-header" class="col-lg-5 col-4">
						<ul>
							<!-- no loggeado -->
							<li id="nav-login" class="dropdown">
								<a href="#" id="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="link-text">Entrar / Registrarse</span> <img src="assets/img/login-bio.svg" alt="Login">
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarLogin">
									<form action="#">
										<h3>Acceder a la cuenta</h3>
										<div class="form-group">
											<label>Correo electrónico</label>
											<input type="text" class="form-control" name="email">
										</div>
										<div class="form-group">
											<label>Contraseña</label>
											<input type="pass" class="form-control" name="password">
										</div>
										<div class="form-group">
											<button type="submit" class="btn">Entrar</button>
										</div>
										<div class="form-group form-group-register">
											<small>¿No tienes cuenta? <a href="#">Registrate aquí</a></small>
										</div>
									</form>
								</div>
							</li>
							<!-- no loggeado -->
						
							<!-- loggeado -->
							<!--<li id="nav-logged"><a href="#"><img src="assets/img/perfil-bio.svg" alt="User"><span class="link-text">Pablo Mendoza</span></a> <a href="#" class="logout"><img src="assets/img/cerrar-sesion-bio.svg"></a></li>-->
							<!-- loggeado -->
							
							<li id="nav-cart"><a href="#"><img src="assets/img/carrito-de-compras-bio.svg" alt="Cart"><span class="quantity-span">0</span></a></li>
							<li id="nav-fav"><a href="#"><img src="assets/img/favoritos-bio.svg" alt="Favorites"><span class="quantity-span">0</span></a></li>

							<!-- loggeado -->
							<!--<li id="nav-logout"><a href="#"><img src="assets/img/cerrar-sesion-bio.svg"></a></li>-->
							<!-- loggeado -->
						</ul>
						<a href="#" class="bio-points">Mis Puntos bio<span class="quantity-span">0<img src="assets/img/icono-puntos-bio.svg" alt="Bio Points"></span></a>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<div id="mainNavbar">
					<div id="top-info" class="w-100 align-items-center">
						<div class="col-md-12 text-right">
							<button class="navbar-toggler toggle-menu" type="button">
								<img src="assets/img/close-menu-movil-bio.svg" alt="Menu Bars">
							</button>
						</div>
						<div class="col-md-12">
							<ul class="social-nav">
								<li><a href="#"><img src="assets/img/icono-facebook-bio.svg" alt="Facebook"></a></li>
								<li><a href="#"><img src="assets/img/icono-instagram-bio.svg" alt="Instagram"></a></li>
								<li><a href="#"><img src="assets/img/icono-twitter-bio.svg" alt="Twitter"></a></li>
								<li><a href="#"><img src="assets/img/icono-linkedin-bio.svg" alt="LinkedIn"></a></li>
							</ul>
						</div>
						<div class="col-md-12">
							<!-- loggeado -->
							<!--<div class="top-info-nav">
								<div class="top-info-log">
									<a href="#"><img src="assets/img/perfil-bio.svg" alt="User"><span class="link-text">Pablo Mendoza</span></a> 
									<a href="#"><img src="assets/img/favoritos-bio.svg" alt="Favorites"><span class="quantity-span">0</span></a>
									<a href="#" class="logout"><img src="assets/img/cerrar-sesion-bio.svg"></a>
								</div>
								<a href="#" class="bio-points">Mis Puntos bio<span class="quantity-span">253<img src="assets/img/icono-puntos-bio.svg" alt="Bio Points"></span></a>
							</div>-->
							<!-- loggeado -->

							<!-- no loggeado -->
							<div class="top-info-nav">
								<a href="#" class="bio-points">Mis Puntos bio<span class="quantity-span">0<img src="assets/img/icono-puntos-bio.svg" alt="Bio Points"></span></a>
								<a href="#"><img src="assets/img/favoritos-bio.svg" alt="Favorites"><span class="quantity-span">0</span></a>
							</div>
							<!-- no loggeado -->
						</div>
					</div>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Víveres</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Bebidas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Bodegón</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Hogar y Juguetes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Chocolates, Cereales y Snacks</a>
						</li>
						<li id="nav-categories" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Más Categorías
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarCategories">
								<a class="dropdown-item" href="#">Cuidado Personal</a>
								<a class="dropdown-item" href="#">Aseo del Hogar</a>
								<a class="dropdown-item" href="#">Mascotas</a>
								<a class="dropdown-item" href="#">Quesos y Charcutería</a>
								<a class="dropdown-item" href="#">Pollo y Carnes</a>
								<a class="dropdown-item" href="#">Verduras, Frutas y Hortalizas</a>
							</div>
						</li>
						<li id="nav-all-categories" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="dropdown-uppercase">Categorías</span>
								<img src="assets/img/flecha-izquierda-bio.svg">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarCategories">
								<a class="dropdown-item" href="#">Víveres</a>
								<a class="dropdown-item" href="#">Bebidas</a>
								<a class="dropdown-item" href="#">Bodegón</a>
								<a class="dropdown-item" href="#">Hogar y Juguetes</a>
								<a class="dropdown-item" href="#">Chocolates, Cereales y Snacks</a>
								<a class="dropdown-item" href="#">Cuidado Personal</a>
								<a class="dropdown-item" href="#">Aseo del Hogar</a>
								<a class="dropdown-item" href="#">Mascotas</a>
								<a class="dropdown-item" href="#">Quesos y Charcutería</a>
								<a class="dropdown-item" href="#">Pollo y Carnes</a>
								<a class="dropdown-item" href="#">Verduras, Frutas y Hortalizas</a>
							</div>
						</li>
						<li id="nav-bios" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarBios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Conoce a bio mercados
								<img src="assets/img/abajo-blanco-bio.svg">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarBios">
								<a class="dropdown-item" href="#">Cultura bio</a>
								<a class="dropdown-item" href="#">Zona bio</a>
								<a class="dropdown-item" href="#">Categorías</a>
								<a class="dropdown-item" href="#">Surcursales</a>
								<a class="dropdown-item" href="#">Proveedores</a>
								<a class="dropdown-item" href="#">Contacto</a>
							</div>
						</li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>




	<!-- MAIN -->

	<main>
		<section id="main-slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="assets/img/slide-bio-1.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h5>¡Aprovecha nuestros combos!</h5>
								<h2>Carnes <img src="assets/img/icono-bio.svg" class="ico-text">io</h2>
								<p>Compra una gran variedad de tipos <br>de carnes a un excelente precio.</p>
								<a href="#" class="btn">Comprar</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/img/slide-bio-1.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h5>¡Aprovecha nuestros combos!</h5>
								<h2>Carnes <img src="assets/img/icono-bio.svg" class="ico-text">io</h2>
								<p>Compra una gran variedad de tipos <br>de carnes a un excelente precio.</p>
								<a href="#" class="btn">Comprar</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/img/slide-bio-1.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption">
								<h5>¡Aprovecha nuestros combos!</h5>
								<h2>Carnes <img src="assets/img/icono-bio.svg" class="ico-text">io</h2>
								<p>Compra una gran variedad de tipos <br>de carnes a un excelente precio.</p>
								<a href="#" class="btn">Comprar</a>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>



		<section id="combos-bio">
			<div class="container">
				<div class="section-title">
					<h2>Combos bio	<img src="assets/img/botón-circular-bio.svg"></h2>
				</div>
			</div>
			<div class="combo-group-big">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div id="combo-group-1" class="row combo-group">
								<div class="col-6 col-lg-12">
									<div class="product-block">
										<div class="product-img">
											<img src="assets/img/combo-bio-001.jpg">
											<div class="product-actions">
												<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
												</button>
												<button type="button" class="btn">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
												</button>
												<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
												</a>
											</div>
										</div>
										<a href="#" class="product-title">Cesta bio</a>
										<span class="product-info">14 Productos</span>
										<div class="product-prices">
											<span class="product-descount">$ 2 / Bs 90.000</span>
											<p>$ 1.5 / Bs 67.500</p>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
									<div class="product-block">
										<div class="product-img">
											<img src="assets/img/combo-bio-002.jpg">
											<div class="product-actions">
												<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
												</button>
												<button type="button" class="btn">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
												</button>
												<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
												</a>
											</div>
										</div>
										<a href="#" class="product-title">Cuidado personal / Hogar bio</a>
										<span class="product-info">11 Productos</span>
										<div class="product-prices">
											<span class="product-descount">$ 2 / Bs 90.000</span>
											<p>$ 1.5 / Bs 67.500</p>
										</div>
									</div>
								</div>
								<div class="row combos-on-mobile">
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-003.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Pollo bio</a>
											<span class="product-info">4 Productos</span>
											<div class="product-prices">
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-004.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Carnes bio</a>
											<span class="product-info">6 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-005.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Charcuteria bio</a>
											<span class="product-info">13 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-006.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Pizza bio</a>
											<span class="product-info">11 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-007.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Perro Caliente bio</a>
											<span class="product-info">10 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-008.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Hamburguesa bio</a>
											<span class="product-info">10 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="right-combos" class="col-lg-8">
							<div class="row">
								<div id="combo-group-2" class="combo-group">
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-003.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Pollo bio</a>
											<span class="product-info">4 Productos</span>
											<div class="product-prices">
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-004.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Carnes bio</a>
											<span class="product-info">6 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-005.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Charcuteria bio</a>
											<span class="product-info">13 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
								</div>
								<div id="combo-group-3" class="combo-group">
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-006.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Pizza bio</a>
											<span class="product-info">11 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-007.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Perro Caliente bio</a>
											<span class="product-info">10 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
									<div class="col-6 col-lg-4">
										<div class="product-block">
											<div class="product-img">
												<img src="assets/img/combo-bio-008.jpg">
												<div class="product-actions">
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
													</button>
													<button type="button" class="btn">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
													</button>
													<button type="button" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
													</button>
												</div>
											</div>
											<a href="#" class="product-title">Hamburguesa bio</a>
											<span class="product-info">10 Productos</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="categories">
			<div class="container">
				<div class="row">
					<div class="col-12 category-box">
						<div class="category-img" style="background-image: url('assets/img/categoria-verduras-bio.jpg');">
							<div class="category-content">
								<h3>Verduras, Frutas<br> y Hortalizas</h3>
								<a href="#">Ver todos los productos <img src="assets/img/botón-circular-bio.svg"></a>
							</div>
						</div>
					</div>
					<div class="col-12 category-box category-box-middle">
						<div class="category-img" style="background-image: url('assets/img/categoria-bebidas-bio.jpg');">
							<div class="category-content">
								<h3>Bebidas</h3>
								<a href="#">Ver todos los productos <img src="assets/img/botón-circular-bio.svg"></a>
							</div>
						</div>
					</div>
					<div class="col-12 category-box category-box-double">
						<div class="category-img category-img-first" style="background-image: url('assets/img/categoria-queso-y-charcuteria-bio.jpg');">
							<div class="category-content">
								<h3>Quesos y Charcuteria</h3>
								<a href="#">Ver todos los productos <img src="assets/img/botón-circular-bio.svg"></a>
							</div>
						</div>
						<div class="category-img category-img-last" style="background-image: url('assets/img/categoria-pollo-y-carnes-bio.jpg');">
							<div class="category-content">
								<h3>Pollos y Carnes</h3>
								<a href="#">Ver todos los productos <img src="assets/img/botón-circular-bio.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="offers" class="hero" style="background-image: url('assets/img/banner-1-bio.jpg');">
			<div class="container hero-container">
				<div class="hero-content">
					<h2>GRANDES <span>Ofertas</span></h2>
					<h3>en nuestros productos de</h3>
					<a href="#">VERDURAS, FRUTAS Y HORTALIZAS <img src="assets/img/botón-circular-bio.svg"></a>
				</div>
			</div>
		</section>

		<section id="products">
			<div class="container">
				<div class="section-title">
					<h2>Nuestros Productos</h2>
				</div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item text-right-md">
						<a class="nav-link active" id="recents-tab" data-toggle="tab" href="#recents" role="tab" aria-controls="recents" aria-selected="true">Más Recientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="sellers-tab" data-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="false">Más Vendidos</a>
					</li>
					<li class="nav-item text-right-md">
						<a class="nav-link" id="searched-tab" data-toggle="tab" href="#searched" role="tab" aria-controls="searched" aria-selected="false">Más Buscado</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="cost-tab" data-toggle="tab" href="#cost" role="tab" aria-controls="cost" aria-selected="false">Mejor Precio</a>
					</li>
				</ul>
				<div class="tab-content" id="ProductsContent">
					<div class="tab-pane fade show active" id="recents" role="tabpanel" aria-labelledby="recents-tab">
						<div class="row">
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-006.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Mantequilla</a>
									<span class="product-info">500 g</span>
									<div class="product-prices">
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-009.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Tomates</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-007.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Queso Blanco</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 4 / Bs 180.000</span>
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-004.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Huevos</a>
									<span class="product-info">30 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-002.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Carne de Res</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 3 / Bs 135.000</span>
										<p>$ 2 / Bs 90.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-001.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Aceite de Maíz</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-003.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Doritos</a>
									<span class="product-info">250 g</span>
									<div class="product-prices">
										<span class="product-descount">$ 1 / Bs 45.000</span>
										<p>$ 0.75 / Bs 33.750</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-0010.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Botella de Vodka</a>
									<span class="product-info">750 ml</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-005.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Jabón de Baño</a>
									<span class="product-info">3 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 1.5 / Bs 67.500</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-008.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Suavisante de Ropa</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
						<div class="row">
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-006.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Mantequilla</a>
									<span class="product-info">500 g</span>
									<div class="product-prices">
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-009.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Tomates</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-007.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Queso Blanco</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 4 / Bs 180.000</span>
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-001.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Aceite de Maíz</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-003.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Doritos</a>
									<span class="product-info">250 g</span>
									<div class="product-prices">
										<span class="product-descount">$ 1 / Bs 45.000</span>
										<p>$ 0.75 / Bs 33.750</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-0010.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Botella de Vodka</a>
									<span class="product-info">750 ml</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-008.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Suavisante de Ropa</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="searched" role="tabpanel" aria-labelledby="searched-tab">
						<div class="row">
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-006.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Mantequilla</a>
									<span class="product-info">500 g</span>
									<div class="product-prices">
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-009.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Tomates</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-007.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Queso Blanco</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 4 / Bs 180.000</span>
										<p>$ 3 / Bs 135.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-004.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Huevos</a>
									<span class="product-info">30 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-003.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Doritos</a>
									<span class="product-info">250 g</span>
									<div class="product-prices">
										<span class="product-descount">$ 1 / Bs 45.000</span>
										<p>$ 0.75 / Bs 33.750</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-005.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Jabón de Baño</a>
									<span class="product-info">3 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 1.5 / Bs 67.500</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-008.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Suavisante de Ropa</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="cost" role="tabpanel" aria-labelledby="cost-tab">
						<div class="row">
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-009.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Tomates</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-004.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Huevos</a>
									<span class="product-info">30 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-002.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Carne de Res</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 3 / Bs 135.000</span>
										<p>$ 2 / Bs 90.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-003.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Doritos</a>
									<span class="product-info">250 g</span>
									<div class="product-prices">
										<span class="product-descount">$ 1 / Bs 45.000</span>
										<p>$ 0.75 / Bs 33.750</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-0010.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Botella de Vodka</a>
									<span class="product-info">750 ml</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-005.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Jabón de Baño</a>
									<span class="product-info">3 Unidades</span>
									<div class="product-prices">
										<span class="product-descount">$ 1.5 / Bs 67.500</span>
										<p>$ 1 / Bs 45.000</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-20">
								<div class="product-block">
									<div class="product-img">
										<img src="assets/img/producto-bio-008.jpg">
										<div class="product-actions">
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
											</button>
											<button type="button" class="btn">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
											<button type="button" class="btn" data-toggle="modal" data-target="#ModalProd">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
											</button>
										</div>
									</div>
									<a href="#" class="product-title">Suavisante de Ropa</a>
									<span class="product-info">1 L</span>
									<div class="product-prices">
										<span class="product-descount">$ 2 / Bs 90.000</span>
										<p>$ 1.5 / Bs 67.500</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="combos" class="hero" style="background-image: url('assets/img/banner-2-bio.jpg');">
			<div class="container hero-container">
				<div class="hero-content">
					<h2>LLÉVATE</h2>
					<h3>uno de nuestros <a href="#">COMBOS bio <img src="assets/img/botón-circular-bio.svg"></a></h3>
					<h4>¡Con un <b>excelente precio</b>!</h4>
				</div>
			</div>
		</section>
	</main>


	<!-- MAIN -->






	<footer class="section footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-block">
						<img src="assets/img/logo-bio-mercados.svg" alt="Bio Mercados">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p><span>Teléfono:</span> +58 414 123 4567</p>
						<p><span>Correo:</span> Contacto@Biomercados.com</p>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#enlaces" role="button" aria-expanded="false" aria-controls="enlaces">
							Enlaces Importantes
						</a>
						<div class="collapse" id="enlaces">
							<div class="card card-body">
								<a href="#">Preguntas Frecuentes</a>
								<a href="#">Términos legales</a>
								<a href="#">Soporte</a>
								<a href="#">Contacto</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#apps" role="button" aria-expanded="false" aria-controls="apps">
							Descarga nuestras <br class="on-desktop">app's móviles
						</a>
						<div class="collapse" id="apps">
							<div class="card card-body">
								<a href="#"><img src="assets/img/descarga-app-android-bio.svg"></a>
								<a href="#"><img src="assets/img/descarga-app-ios-bio.svg"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-block">
						<a class="btn btn-title" data-toggle="collapse" href="#suscripcion" role="button" aria-expanded="false" aria-controls="suscripcion">
						   Suscríbete para recibir notificaciones
						</a>
						<div class="collapse" id="suscripcion">
							<div class="card card-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis ipsa et odio.</p>
								<div class="footer-form">
									<form action="">
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Escribe tu correo aquí..." aria-label="Escribe tu correo aquí...">
												<div class="input-group-append">
													<button class="btn" type="button" id="button-addon2">Suscribirse</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<p>Todos los derechos reservados. Bio Mercados 2020</p>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="ModalProd" tabindex="-1" role="dialog" aria-labelledby="ModalProdLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="product-block">
						<div class="row">
							<div class="col-lg-5">
								<div class="product-img">
									<img src="assets/img/producto-bio-002.jpg">
								</div>
							</div>
							<div class="col-lg-7">
								<div class="product-description">
									<a href="#" class="product-title">Carne de Res</a>
									<span class="product-info">1 Kg</span>
									<div class="product-prices">
										<span class="product-descount">$ 3 / Bs 135.000</span>
										<p>$ 2 / Bs 90.000</p>
									</div>
								</div>
								<div class="product-options">
									<form action="">
										<div class="product-quantity">
											<label>Cantidad</label>
											<div class="product-quantity-group">
												<input id="quantity" class="form-control" type="text" name="quantity" value="1">
												<div class="product-quantity-buttons">
													<button type="button" class="btn" onclick="increaseValue()">
														<img src="assets/img/increase.png" alt="Increase">
													</button>
													<button type="button" class="btn" onclick="decreaseValue()">
														<img src="assets/img/decrease.png" alt="decrease">
													</button>
												</div>
											</div>
										</div>
										<div class="product-prices">
											<p><b>Total:</b> $ 2 / Bs 90.000</p>
										</div>
										<div class="product-buttons">
											<button type="submit" class="btn btn-addcart">Añadir al carrito</button>
											<button type="button" class="btn btn-addfavorite">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="ModalProdCombo" tabindex="-1" role="dialog" aria-labelledby="ModalProdComboLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="product-block">
						<div class="row">
							<div class="col-lg-5">
								<div class="product-img">
									<img src="assets/img/combo-bio-001.jpg">
								</div>
							</div>
							<div class="col-lg-7">
								<div class="product-description">
									<a href="#" class="product-title">Cesta bio</a>
									<span class="product-info">2 Harinas de maíz blanco - 1 kg</span>
									<span class="product-info">1 Arroz blanco tipo 1 - 1 kg</span>
									<span class="product-info">1 Pasta larga o corto - 1 kg</span>
									<span class="product-info">1 Margarina - 500 g</span>
									<span class="product-info">1 Aceite de maíz o soya - 1 L</span>
									<span class="product-info">1 Harina de trigo - 1 kg</span>
									<span class="product-info">1 Azúcar refinada - 1 kg</span>
									<span class="product-info">1 Sal de mar - 1 kg</span>
									<span class="product-info">1 Café - 500 g</span>
									<span class="product-info">1 Vinagre - 500 ml</span>
									<span class="product-info">1 Fororo - 900 g</span>
									<span class="product-info">1 Leche en polvo - 400 g</span>
									<span class="product-info">2 Sardinas de lata - 260 g</span>
									<span class="product-info">1 Granos - 500 g</span>
									<div class="product-prices">
										<span class="product-descount">$ 3 / Bs 135.000</span>
										<p>$ 2 / Bs 90.000</p>
									</div>
								</div>
								<div class="product-options">
									<form action="">
										<div class="product-quantity">
											<label>Cantidad</label>
											<div class="product-quantity-group">
												<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
												<div class="product-quantity-buttons">
													<button type="button" class="btn" onclick="increaseValue2()">
														<img src="assets/img/increase.png" alt="Increase">
													</button>
													<button type="button" class="btn" onclick="decreaseValue2()">
														<img src="assets/img/decrease.png" alt="decrease">
													</button>
												</div>
											</div>										
										</div>
										<div class="product-prices">
											<p><b>Total:</b> $ 2 / Bs 90.000</p>
										</div>
										<div class="product-buttons">
											<button type="submit" class="btn btn-addcart">Añadir al carrito</button>
											<button type="button" class="btn btn-addfavorite">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="over toggle-menu"></div>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".toggle-menu").click(function(){
				$(".over").toggle();
				$(".navbar").toggleClass("navbar-translate");
			});
		});

		function increaseValue() {
		  var value = parseInt(document.getElementById('quantity').value, 10);
		  value = isNaN(value) ? 0 : value;
		  value++;
		  document.getElementById('quantity').value = value;
		}

		function decreaseValue() {
		  var value = parseInt(document.getElementById('quantity').value, 10);
		  value = isNaN(value) ? 0 : value;
		  value < 1 ? value = 1 : '';
		  value--;
		  document.getElementById('quantity').value = value;
		}

		/*DUPLICADA SOLO PARA EL DEMO, ELIMINAR DURANTE LA PROGRAMACIÓN*/


		function increaseValue2() {
		  var value = parseInt(document.getElementById('quantity2').value, 10);
		  value = isNaN(value) ? 0 : value;
		  value++;
		  document.getElementById('quantity2').value = value;
		}

		function decreaseValue2() {
		  var value = parseInt(document.getElementById('quantity2').value, 10);
		  value = isNaN(value) ? 0 : value;
		  value < 1 ? value = 1 : '';
		  value--;
		  document.getElementById('quantity2').value = value;
		}
	</script>
</body>
</html>