<template>
	<section id="catalogo" class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div id="content">	
					<ul id='selected-filters'></ul>
					<div class="products-order">
							<div class="col-lg-3">
								<div class="form-group" style="float: left;">
									<!--<span>Mostrando</span>
									<select id="show" class="form-control" v-model="limitP">
										<option value="5">5</option>
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="-1">Todos</option>
									</select>-->
									<span style="margin-top: 10px !important;">{{products.total}} productos encontrados</span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group" style="padding-top: 5px !important;">
									<h5 style="border:1px solid white; padding:5px 10px; border-radius:8px;">Categoria: {{ catName }}</h5>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="form-group" style="width: 100%; float: right;">
									<h5>Organizar por:</h5>
									<select id="order-by" class="form-control" v-model="orderP">
										<option value="AZasc">De A -> Z</option>
										<option value="ZAdesc">De Z -> A</option>
										<option value="Pasc">Precio - De menor a mayor</option>
										<option value="Pdesc">Precio - De mayor a menor</option>
									</select>
								</div>
							</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<h3 class="filter-title">
							<img src="assets/img/filtro-bio-mercados.svg">Filtrar por <img class="rotate-img" src="assets/img/botón-circular-bio.svg">
						</h3>
						</div>
						<div class="col-md-2">
								<div class="range-slider">
								    <input type="text" class="js-range-slider" value="" />
								</div>
								<form class="form-inline" style="padding-left: 25%; display: none;">
									<div class="form-group">
										<label style="padding-right: 5px;">Desde: </label>
									    <input type="number" style="width: 80px" class="js-input-from form-control" v-model="min_price" />
									 </div>
									 <div class="form-group">
									 	<label style="padding-right: 5px; padding-left: 5px;">Hasta: </label>
									    <input type="number" style="width: 80px" class="js-input-to form-control" v-model="max_price" />
									</div>
								</form>
						</div>
						<div class="col-md-6">
							<form class="form-inline" id="filter-more-result">
								<div class="form-group">
									<label style="font-size: 18px; font-weight: bold;">Productos: </label>
								</div>
								<div class="form-group">
									<input type="radio" class="check-box" id="mas-reciente" title="Mas Recientes" name="radioOferta" value="mr" v-model="filterP">
									<label for="mas-reciente"> Más Recientes</label>
								</div>
								<div class="form-group">
									<input type="radio" class="check-box" id="mas-buscados" title="Mas Buscados" name="radioOferta" value="mb" v-model="filterP">
									<label for="mas-buscados"> Más Buscados</label>
								</div>
								<div class="form-group">
									<input type="radio" class="check-box" id="mas-vendidos" title="Mas Vendidos" name="radioOferta" value="mv" v-model="filterP">
									<label for="mas-vendidos"> Más Vendidos</label>
								</div>
								<div class="form-group">
									<input type="radio" class="check-box" id="mejor-precio" title="Mejor Precio" name="radioOferta" value="mj" v-model="filterP"> 
									<label for="mejor-precio"> Mejor Precio</label>
								</div>
							</form>
						</div>
					</div>

					<hr />

					<ProductList v-if="products" v-on:getpage="pageclick" :tasadolar="tasadolar" :products="products" :user_id="datauser.id"></ProductList>

					<div class="row" style="margin-top: 40px !important;">
						<div class="col-md-6">
							<Slider :id="'slider_catalog1'" :sliders="ads_a"></Slider>
						</div>
						<div class="col-md-6">
							<Slider :id="'slider_catalog2'" :sliders="ads_b"></Slider>
						</div>
					</div>

					<!--<div class="bio-ads">
						<div class="ad-box">
							<Slider :id="'slider_catalog1'" :sliders="ads_a"></Slider>
							<Slider :id="'slider_catalog2'" :sliders="ads_b"></Slider>
							<Slider :id="'slider_catalog3'" :sliders="ads_c"></Slider>
							<Slider :id="'slider_catalog4'" :sliders="ads_d"></Slider>
						</div>
					</div>-->
				</div>
			</div>
		</div>
		
	</section>
</template>
<script>
	import ProductList from './ProductCatalog.vue';
	import Slider from './SliderVertical.vue';

    export default {
        data() {
            return {
				id: 0,
				cat: 0,
				search: '',
				sParam: '',
				idParam: '',
				fTags: '',
				selectedTags:'',
				products: {},
				filterP: '',
				limitP: 50,
				orderP: 'AZasc',
				rangeP: '',
				min_price: 0,
				max_price: 50,
				page: 1,
            	datauser:[],
            	catName: categoryName,
            	tgName: ''

            }
		},
		components: {
			ProductList,
			Slider
        },
		props: {
			userlogged: Object,
			tasadolar: Number,
			tags: Array,
			ads_a: Array,
			ads_b: Array,
			ads_c: Array,
			ads_d: Array
		},
        methods: {
			filterProducts: async function() {
				const response = await axios.get(URLSERVER+'api/products?'+this.filtros);
				this.products = response.data.data;
				console.log(this.products);
			},
			putToggle(event) {
				let tmp = [];
				event.target.classList.toggle('hashtag_active');
				document.querySelectorAll(".hashtag_active").forEach( a => {
				 	tmp.push(a.innerHTML.replace("#",""));
				});
				this.selectedTags = tmp.join(" ");
				if(!!this.selectedTags) {
					this.fTags = "&tags="+this.selectedTags;
				}else {
					this.fTags = '';
				}
			},
			pageclick(value) {
				this.page = value;
			},
			isObject: function(o) 
			{ 
				return typeof o == "object" 
			},
		
        },
        mounted() {
        	this.tgName = tagName;
        	console.log("ads::> ",this.ads);
			if(this.isObject(this.userlogged)){
				this.datauser = this.userlogged;
			}else{
				console.log("Not logout");
				this.datauser.id = 'undefined';
			}

			if(!!window.location.href.split("cat=")[1]){
				this.cat = window.location.href.split("cat=")[1].split("&search=")[0] || 0;
			}
			
			if(!!window.location.href.split("search=")[1]) {
				this.search = window.location.href.split("search=")[1] || '';	
				this.sParam = "&search="+this.search;
			}

			if(!!window.location.href.split("id=")[1]) {
				this.id = window.location.href.split("id=")[1] || 0;	
				this.idParam = "&id="+this.id;
			}

		},
		computed: {
			filtros: function() {
				return "&"+this.filterP+"&cat="+this.cat+"&tags="+this.tgName+"&limit="+this.limitP+"&order="+this.orderP+"&precio="+this.min_price+","+this.max_price+"&page="+this.page+this.sParam+this.fTags+this.idParam;
			}
		},
		created: function() {
			// console.log("ads::> ",this.ads);
			this.getDebounceProducts = _.debounce(this.filterProducts,100);
		},
		watch: {
			filtros: function() {
				// this.filterProducts();
				this.getDebounceProducts();
			}
		}
    }
</script>
