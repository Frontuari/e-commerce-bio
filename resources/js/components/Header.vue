<template>
    <header id="myHeader">
		<div class="top-header color-white">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="top-info">
							<a href="mailto:contacto@biomercado.com">contacto@biomercado.com</a>
							<a href="tel:584241234567">+58 424 123 4567</a>
						</div>
					</div>
					<!--<div class="col-md-6">
						<ul class="social-nav">
							<li><a href="#"><img src="assets/img/icono-facebook-bio.svg" alt="Facebook"></a></li>
							<li><a href="#"><img src="assets/img/icono-instagram-bio.svg" alt="Instagram"></a></li>
							<li><a href="#"><img src="assets/img/icono-twitter-bio.svg" alt="Twitter"></a></li>
							<li><a href="#"><img src="assets/img/icono-linkedin-bio.svg" alt="LinkedIn"></a></li>
						</ul>
					</div>-->
				</div>
			</div>
		</div>
		<div class="middle-header">
			<div class="container-fluid container-movil">
				<div class="row align-items-center-md">
					<div id="toggler-header" class="col-4">
						<button class="navbar-toggler toggle-menu" type="button">
							<img src="assets/img/menu-movil-bio.svg" alt="Menu Bars">
						</button>
					</div>
					<div id="search-header" class="col-lg-5 col-md-12">
						<form class="form-inline" action="">
							<input class="form-control" type="search" placeholder="Busca aquí..." aria-label="Search">
							<button class="btn btn-search" type="submit"><img src="assets/img/busqueda-bio.svg"></button>
						</form>
					</div>
					<div id="brand-header" class="col-lg-2 col-4">
						
						<a  href="" class="navbar-brand"><img src="assets/img/logo-bio-en-linea.png" alt="Bio Mercados"></a>
					</div>
					<div id="nav-header" class="col-lg-5 col-4">
						<ul>
							<!-- no loggeado-->
							<li id="nav-login" class="dropdown">
								<a href="#" id="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="link-text">Entrar / Registrarse</span> <img src="assets/img/login-bio.svg" alt="Login">
								</a>

								
						<!-- el login-->
						<div class="dropdown-menu  login_navbar" aria-labelledby="navbarLogin">
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
											<small>¿No tienes cuenta? <a >Registrate aquí</a></small>
										</div>
									</form>
						</div>


								
							</li>
							<!-- no loggeado -->
						
							<!-- loggeado -->
							<!--<li id="nav-logged"><a href="#"><img src="assets/img/perfil-bio.svg" alt="User"><span class="link-text">Pablo Mendoza</span></a> <a href="#" class="logout"><img src="assets/img/cerrar-sesion-bio.svg"></a></li>-->
							<!-- loggeado -->
							
							<li id="nav-cart"><a  href="cart"><img src="assets/img/carrito-de-compras-bio.svg" alt="Cart"><span class="quantity-span">{{cant_cart}}</span></a></li>
							<li id="nav-fav"><a href="#"><img src="assets/img/favoritos-bio.svg" alt="Favorites"><span class="quantity-span">0</span></a></li>

							<li id="bio-wallet"><a href="#" class="bio-points"><span class="quantity-span">0<img src="assets/img/icono-puntos-bio.svg" alt="Bio Points"></span>bio Wallet</a></li>

							<!-- loggeado -->
							<!--<li id="nav-logout"><a href="#"><img src="assets/img/cerrar-sesion-bio.svg"></a></li>-->
							<!-- loggeado -->
						</ul>

					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light color-white navbar-custom">
			<div class="container-fluid">
				<div id="mainNavbar">
					<div id="top-info" class="w-100 align-items-center">
						<div class="col-md-12 text-right">
							<button class="navbar-toggler toggle-menu" type="button">
								<img src="assets/img/x.svg" alt="Menu Bars">
							</button>
						</div>
						<!---->
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
							<a class="nav-link" >Víveres</a>
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
								<a class="dropdown-item" >Víveres</a>
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
</template>
<script>
export default {
    data() {
        return {
            cant_cart: 0,
            
        }
    },
    methods: {
        updateCart(data) {
            console.log("entro por aqui por el on",data);
        }
    },
    created() {
        EventBus.$on('update_cantCart', data => {
            this.cant_cart = data;
        });
    },
    mounted() {
		if( window.localStorage.getItem("cart") ){
			this.cant_cart = JSON.parse(window.localStorage.getItem("cart")).length;
		}else{
			this.cant_cart = 0;
		}
    }
}
</script>