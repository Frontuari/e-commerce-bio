<template>
    <section id="products">
		<div class="container-fluid">
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
					<a class="nav-link" id="searched-tab" data-toggle="tab" href="#searched" role="tab" aria-controls="searched" aria-selected="false">Más Buscados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="cost-tab" data-toggle="tab" href="#cost" role="tab" aria-controls="cost" aria-selected="false">Mejor Precio</a>
				</li>
			</ul>
			<div class="tab-content" id="ProductsContent">
				<div class="tab-pane fade show active" id="recents" role="tabpanel" aria-labelledby="recents-tab">
					<div class="row">
						<div class="col-6 col-20" v-for="product_recent in recent" v-bind:key="product_recent.id">
							<div class="product-block">
								<div class="product-img">
									<img :src="'storage/'+product_recent.photo">
									<div class="product-actions">
										<button type="button" class="btn" @click="addToCart(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
										</button>
										<button type="button" class="btn" @click="addToFavorite(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
										</button>
										<button type="button" @click="getProduct(product_recent.id)" class="btn" data-toggle="modal" data-target="#ModalProd">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
										</button>
									</div>
								</div>
								<a href="#" class="product-title">{{ product_recent.name }}</a>
								<!-- <span class="product-info">500 g</span> -->
								<div class="product-prices">
									<p>Bs {{ product_recent.price | FormatNumber }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
					<div class="row">
						<div class="col-6 col-20" v-for="product_sold in sold" v-bind:key="product_sold.id">
							<div class="product-block">
								<div class="product-img">
									<img :src="'storage/'+product_sold.photo">
									<div class="product-actions">
										<button type="button" class="btn" @click="addToCart(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
										</button>
										<button type="button" class="btn" @click="addToFavorite(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
										</button>
										<button type="button" @click="getProduct(product_recent.id)" class="btn" data-toggle="modal" data-target="#ModalProd">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
										</button>
									</div>
								</div>
								<a href="#" class="product-title">{{ product_sold.name }}</a>
								<!-- <span class="product-info">500 g</span> -->
								<div class="product-prices">
									<p>Bs {{ product_sold.price | FormatNumber }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="searched" role="tabpanel" aria-labelledby="searched-tab">
					<div class="row">
						<div class="col-6 col-20" v-for="product_view in viewed" v-bind:key="product_view.id">
							<div class="product-block">
								<div class="product-img">
									<img :src="'storage/'+product_view.photo">
									<div class="product-actions">
										<button type="button" class="btn"  @click="addToCart(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
										</button>
										<button type="button" class="btn" @click="addToFavorite(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
										</button>
										<button type="button" @click="getProduct(product_recent.id)" class="btn" data-toggle="modal" data-target="#ModalProd">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
										</button>
									</div>
								</div>
								<a href="#" class="product-title">{{ product_view.name }}</a>
								<!-- <span class="product-info">500 g</span> -->
								<div class="product-prices">
									<p>Bs {{ product_view.price | FormatNumber }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="cost" role="tabpanel" aria-labelledby="cost-tab">
					<div class="row">
						<div class="col-6 col-20" v-for="product_best in best_price" v-bind:key="product_best.id">
							<div class="product-block">
								<div class="product-img">
									<img :src="'storage/'+product_best.photo">
									<div class="product-actions">
										<button type="button" class="btn" @click="addToCart(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
										</button>
										<button type="button" class="btn" @click="addToFavorite(product_recent)">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
										</button>
										<button type="button" @click="getProduct(product_recent.id)" class="btn" data-toggle="modal" data-target="#ModalProd">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
										</button>
									</div>
								</div>
								<a href="#" class="product-title">{{ product_best.name }}</a>
								<!-- <span class="product-info">500 g</span> -->
								<div class="product-prices">
									<p>Bs {{ product_best.price | FormatNumber }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="ModalProd" tabindex="-1" role="dialog" aria-labelledby="ModalProdLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="product-block">
							<div class="row">
								<div class="col-lg-5">
									<div class="product-img">
										<img :src="'storage/'+product.photo">
									</div>
								</div>
								<div class="col-lg-7">
									<div class="product-description">
										<a href="#" class="product-title">{{product.name}}</a>
										<!-- <span class="product-info">1 Kg</span> -->
										<div class="product-prices">
											<!-- <span class="product-descount">$ 3 / Bs 135.000</span> -->
											<p>Bs {{ product.price | FormatNumber }}</p>
										</div>
									</div>
									<div class="product-options">
										<form action="">
											<div class="product-quantity">
												<label>Cantidad</label>
												<div class="product-quantity-group">
													<input id="quantity" class="form-control" type="text" name="quantity" v-model="cantModal" value="1">
													<div class="product-quantity-buttons">
														<button type="button" class="btn" @click="count(1)">
															<img src="assets/img/increase.png" alt="Increase">
														</button>
														<button type="button" class="btn" @click="count(2)">
															<img src="assets/img/decrease.png" alt="decrease">
														</button>
													</div>
												</div>
											</div>
											<div class="product-prices">
												<p><b>Total:</b> Bs {{totalModal | FormatNumber}} </p>
											</div>
											<div class="product-buttons">
												<button type="submit" class="btn" @click="addToCart(product)">Añadir al carrito</button>
												<button type="button" class="btn" @click="addToFavorite(product)">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
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
	</section>
</template>

<script>
    export default {
        data() {
            return {
                viewed: [],
                recent: [],
                sold: [],
                best_price: [],
				product: [],
				cantModal: 1,
            }
        },
		methods: {
			getProduct: async function(id) {
				const response = await axios.get(URLSERVER+'api/products/'+id);
				this.product = response.data.data;
				this.cantModal = 1;
			},
			getViewed: async function () {
				const response = await axios.get(URLSERVER+'api/products/most/viewed');
				this.viewed = response.data.data;
			},
			getRecent: async function () {
				const response = await axios.get(URLSERVER+'api/products/most/recent');
				this.recent = response.data.data;
			},
			getSold: async function () {
				const response = await axios.get(URLSERVER+'api/products/most/sold');
				this.sold = response.data.data;	
			},
			getBestPrice: async function () {
				const response = await axios.get(URLSERVER+'api/products/best/price');
				this.best_price = response.data.data;
			},
			count: function (type) {
				if(type==1)
					this.cantModal += 1;
				else if (type==2) {
					if(this.cantModal > 1)
						this.cantModal -= 1;
				}
			},
			addToCart(product) {
				let cart = [];
				if(localStorage.getItem('cartNew')){
					cart = JSON.parse(localStorage.getItem('cartNew'));
				}

				cart = this.validateCart(product,cart);

				//cart.push(tmp);
				localStorage.setItem('cartNew', JSON.stringify(cart));
				EventBus.$emit("update_cantCart",cart.length);
			},
			validateCart(product,tmp) {
				let exist = false;
				tmp.forEach( (a,b) => {
					if (a.product.id == product.id) {
						tmp[b].cant++;
						exist = true;
					}
				});
				if(!exist) {
					console.log("entro por aqui porque es primera vez");
					tmp.push({product: product,cant: 1});
				}
				return tmp;
			},
			addToFavorite(product) {
				let favorite = [];
				if(localStorage.getItem('favorite')){
					favorite = JSON.parse(localStorage.getItem('favorite'));
				}
				favorite.push(product);
				localStorage.setItem('favorite', JSON.stringify(favorite));
			},
			removeCart(id) {
				let storageProducts = JSON.parse(localStorage.getItem('cartNew'));
				let products = storageProducts.filter(product => product.id !== id );
				localStorage.setItem('products', JSON.stringify(products));
			}
		},
		filters: {
			FormatNumber: function (num) {
				num = parseFloat(num).toFixed(2);
				const arrNum = num.split(".");
				const decimal = arrNum[1];
				return arrNum[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")+","+decimal;
			}
		},
        mounted(){
			this.getViewed();
			this.getRecent();
			this.getSold();
			this.getBestPrice();
		},
		computed: {
			totalModal: function() {
				return this.product.price * this.cantModal;
			}
			
		}
    }
</script>