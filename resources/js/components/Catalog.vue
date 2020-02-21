<template>
	<section id="catalogo" class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div id="sidebar">
					<div class="products-order">
						<div class="form-group">
							<span>Mostrando</span>
							<select id="show" class="form-control" v-model="limitP">
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="-1">Todos</option>
							</select>
							<span>Resultados de {{products.total}}</span>
						</div>
						<div class="form-group">
							<h5>Organizar por:</h5>
							<select id="order-by" class="form-control" v-model="orderP">
								<option value="AZasc">De A -> Z</option>
								<option value="ZAdesc">De Z -> A</option>
								<option value="Pasc">Precio - De menor a mayor</option>
								<option value="Pdesc">Precio - De mayor a menor</option>
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
			

								<div class="range-slider">
								    <input type="text" class="js-range-slider" value="" />
								</div>
								  <hr>
								<div class="extra-controls">
									  <div class="form-group">
									    <input type="number" class="js-input-from form-control" v-model="min_price" />
									    <input type="number" class="js-input-to form-control" v-model="max_price" />
									</div>
								 </div>
								

							</div>
							<div class="filter filter-offers">
								<h4>Ofertas</h4>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-reciente" title="Mas Recientes" name="mas-reciente" value="mr" v-model="filterP">
									<label for="mas-reciente">Más Recientes</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-buscados" title="Mas Buscados" name="mas-buscados" value="mb" v-model="filterP">
									<label for="mas-buscados">Más Buscados</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mas-vendidos" title="Mas Vendidos" name="mas-vendidos" value="mv" v-model="filterP">
									<label for="mas-vendidos">Más Vendidos</label>
								</div>
								<div class="form-group">
									<input type="checkbox" class="check-box" id="mejor-precio" title="Mejor Precio" name="mejor-precio" value="mj" v-model="filterP"> 
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
							<select id="show" class="form-control" v-model="limitP">
								<option value="5">5</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="-1">Todos</option>
							</select>
							<span>Resultados de {{products.total}}</span>
						</div>
						<div class="form-group">
							<h5>Organizar por:</h5>
							<select id="order-by" class="form-control" v-model="orderP">
								<option value="AZasc">De A -> Z</option>
								<option value="ZAdesc">De Z -> A</option>
								<option value="Pasc">Precio - De menor a mayor</option>
								<option value="Pdesc">Precio - De mayor a menor</option>
								<!-- <option value="2">Más Vendidos</option>
								<option value="2">Más Recientes</option> -->
							</select>
						</div>
					</div>

					<ProductList :tasadolar="tasadolar" :products="products"></ProductList>

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
</template>
<script>
	import ProductList from './ProductCatalog.vue';

    export default {
        data() {
            return {
				products: {},
				filterP: [],
				limitP: 5,
				orderP: 'AZasc',
				rangeP: '',
				min_price: 100000,
				max_price: 800000
            }
		},
		components: {
            ProductList
        },
		props: {
			userlogged: Object,
			tasadolar: Number
		},
        methods: {
            getproducts: async function () {
				const response = await axios.get(URLHOME+'api/products');
				this.products = response.data.data;
			},
			filterProducts: async function() {
				const response = await axios.get(URLSERVER+'api/products?'+this.filtros);
				this.products = response.data.data;
			}
        },
        mounted() {
			// this.getproducts();
		},
		computed: {
			filtros: function() {
				return this.filterP.join("&")+"&limit="+this.limitP+"&order="+this.orderP+"&precio="+this.min_price+","+this.max_price;
			}
		},
		created: function() {
			this.getDebounceProducts = _.debounce(this.filterProducts,500);
		},
		watch: {
			filtros: function() {
				this.getDebounceProducts();
			}
		}
    }
</script>
