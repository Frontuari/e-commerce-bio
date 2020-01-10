@extends('partials.base')

@section('title','Catalog')

@section('body')

<!-- MAIN -->

<section class="jumbotron" style="background-image: url('assets/img/banner-titulos.jpg');">
		<div class="container">
			<div class="text-center">
				<h1>Víveres</h1>
			</div>
		</div>
	</section>
	<section id="catalogo" class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div id="sidebar">
					<div class="products-order">
						<div class="form-group">
							<span>Mostrando</span>
							<select id="show" class="form-control">
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="-1">Todos</option>
							</select>
							<span>Resultados de 253</span>
						</div>
						<div class="form-group">
							<h5>Organizar por:</h5>
							<select id="order-by" class="form-control">
								<option value="1">De A -> Z</option>
								<option value="2">De Z -> A</option>
							</select>
						</div>
					</div>
					<div class="filter-options">
						<h3 class="filter-title" data-toggle="collapse" href="#filters-content" role="button" aria-expanded="false" aria-controls="filters-content">
							<img src="assets/img/filtro-bio-mercados.svg">Filtrar por <img class="rotate-img" src="assets/img/botón-circular-bio.svg">
						</h3>
						<div id="filters-content" class="collapse">
							<div class="filter filter-price">
								<h4>Precio</h4>
								<div class="range-output-price">
									<div class="range-output range-o0"></div> <span>-</span> <div class="range-output range-o1"></div>
								</div>
								<div class="range-container">
									<div class="range-slider">
										<div class="range-track"></div>
									</div>
									<div class="range-thumb range-t0"></div>
									<div class="range-thumb range-t1"></div>
								</div>
							</div>
							<div class="filter filter-offers">
								<h4>Ofertas</h4>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-reciente" title="Mas Recientes" name="mas-reciente">
									<label for="mas-reciente">Más Recientes</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-buscados" title="Mas Buscados" name="mas-buscados">
									<label for="mas-buscados">Más Buscados</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-vendidos" title="Mas Vendidos" name="mas-vendidos">
									<label for="mas-vendidos">Más Vendidos</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mejor-precio" title="Mejor Precio" name="mejor-precio">
									<label for="mejor-precio">Mejor Precio</label>
								</div>
							</div>
							<div class="filter filter-tags">
								<h4>Por Etiquetas</h4>
								<span class="hashtag">#Enlatados</span>
								<span class="hashtag">#Pastas</span>
								<span class="hashtag">#Harinas</span>
								<span class="hashtag">#Arroz</span>
								<span class="hashtag">#Salsas</span>
								<span class="hashtag">#Aceites</span>
							</div>
						</div>
					</div>
					<div class="bio-ads">
						<div class="ad-box">
							<a href="#"><img src="assets/img/puntos-bio-mercados.jpg"></a>
						</div>
						<div class="ad-box">
							<a href="#"><img src="assets/img/oferta-bebidas-bio-mercados.jpg"></a>
						</div>
						<div class="ad-box">
							<a href="#"><img src="assets/img/puntos-bio-mercados.jpg"></a>
						</div>
					</div>
				</div>
				<div id="content">

					
					<!--Filtros seleccionados-->
					<ul id='selected-filters'></ul>
					<!--Fin filtros seleccionados-->


					<div class="products-order">
						<div class="form-group">
							<span>Mostrando</span>
							<select id="show" class="form-control">
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="-1">Todos</option>
							</select>
							<span>Resultados de 253</span>
						</div>
						<div class="form-group">
							<h5>Organizar por:</h5>
							<select id="order-by" class="form-control">
								<option value="1">De A -> Z</option>
								<option value="2">De Z -> A</option>
								<option value="2">Precio - De menor a mayor</option>
								<option value="2">Precio - De mayor a menor</option>
								<option value="2">Más Vendidos</option>
								<option value="2">Más Recientes</option>
							</select>
						</div>
					</div>

					<div class="product-list">
						<div class="container-fluid">
							<div class="row">
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Mantequilla</a>
											<span class="product-info">500 g</span>
											<div class="product-prices">
												<p>$ 3 / Bs 135.000</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Tomates</a>
											<span class="product-info">1 Kg</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1 / Bs 45.000</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Queso Blanco</a>
											<span class="product-info">1 Kg</span>
											<div class="product-prices">
												<span class="product-descount">$ 4 / Bs 180.000</span>
												<p>$ 3 / Bs 135.000</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Huevos</a>
											<span class="product-info">30 Unidades</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Carne de Res</a>
											<span class="product-info">1 Kg</span>
											<div class="product-prices">
												<span class="product-descount">$ 3 / Bs 135.000</span>
												<p>$ 2 / Bs 90.000</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Aceite de Maíz</a>
											<span class="product-info">1 L</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Doritos</a>
											<span class="product-info">250 g</span>
											<div class="product-prices">
												<span class="product-descount">$ 1 / Bs 45.000</span>
												<p>$ 0.75 / Bs 33.750</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Botella de Vodka</a>
											<span class="product-info">750 ml</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Jabón de Baño</a>
											<span class="product-info">3 Unidades</span>
											<div class="product-prices">
												<span class="product-descount">$ 1.5 / Bs 67.500</span>
												<p>$ 1 / Bs 45.000</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-6 col-lg-12">
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
										<div class="product-content">
											<a href="#" class="product-title">Suavizante de Ropa</a>
											<span class="product-info">1 L</span>
											<div class="product-prices">
												<span class="product-descount">$ 2 / Bs 90.000</span>
												<p>$ 1.5 / Bs 67.500</p>
											</div>
										</div>
										<div class="product-add">
											<span class="product-info">Disponibles: <b>522 en Stock</b></span>
											<form action="">
												<div class="product-quantity">
													<label>Cantidad</label>
													<div class="product-quantity-group">
														<input id="quantity2" class="form-control" type="text" name="quantity" value="1">
														<div class="product-quantity-buttons">
															<button type="button" class="btn increaseValue" onclick="" >
																<img src="assets/img/increase.png" alt="Increase">
															</button>
															<button type="button" class="btn decreaseValue" >
																<img src="assets/img/decrease.png" alt="decrease">
															</button>
														</div>
													</div>										
												</div>
												<div class="product-buttons">
													<button type="submit" class="btn btn-addcart-outline">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
														Añadir al carrito
													</button>
													<button type="button" class="btn btn-addfavorite">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
														Añadir a Favoritos
													</button>
													<button type="button" class="btn btn-view">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><defs><style>.cls-1{fill:#ccc;}</style></defs><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
														Ver Producto
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="pagination">
										<ul>
											<li><a href="#"><img src="assets/img/prev.png" alt="Prev"></a></li>
											<li><a href="#">1</a></li>
											<li><a href="#" class="active">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><img src="assets/img/next.png" alt="Next"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="bio-ads">
						<div class="ad-box">
							<a href="#"><img src="assets/img/puntos-bio-mercados.jpg"></a>
						</div>
						<div class="ad-box">
							<a href="#"><img src="assets/img/oferta-bebidas-bio-mercados.jpg"></a>
						</div>
						<div class="ad-box">
							<a href="#"><img src="assets/img/oferta-bebidas-bio-mercados.jpg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- MAIN -->
@stop