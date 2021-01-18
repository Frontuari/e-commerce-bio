<template>
    <section id="combos-bio">
		<div class="container">
			<div class="section-title">
				<h2>Destacados</h2>
			</div>
		</div>
		<div class="combo-group-big">
			<div class="container-fluid">
				<div class="row">
					<div id="right-combos" class="col-lg-12">
						<div class="row">
							<div id="combo-group-2" class="combo-group">
								<div class="col-6 col-lg-3" v-for="(com, index) in combo_product.slice(0,8)" :key="com.id">
									<div class="product-block">
										<div class="product-img">
											<LazyImg v-if="com.image != null" :source="'storage/'+com.image | BigImage"></LazyImg>
											<div class="product-actions">
												<button type="button" class="btn" @click="addComboToCart(com.products)">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.31 15"><title>añadir-carrito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M13.2,11.58H8.83a.45.45,0,1,0,0,.9H10.1a.81.81,0,1,1-.81.81.46.46,0,0,0-.91,0,1.72,1.72,0,1,0,3.22-.81h1.6a.45.45,0,1,0,0-.9Z"/><path class="cls-1" d="M14.21,3.33a.48.48,0,0,0-.35-.16H4V1.35A.45.45,0,0,0,3.67.92L.58,0A.45.45,0,0,0,0,.32a.45.45,0,0,0,.3.56l2.77.81v9.89H2.65a.45.45,0,0,0,0,.9h2.6a.81.81,0,1,1-.81.81.45.45,0,1,0-.9,0,1.72,1.72,0,1,0,1.71-1.71H4v-.77h8.52a.43.43,0,0,0,.22-.06.46.46,0,0,0,.22-.3L14.3,3.71A.48.48,0,0,0,14.21,3.33Zm-.9.74L13,5.39H4V4.07ZM4,9.91V8.59H10.1a.45.45,0,0,0,0-.9H4V6.29h8.87l-.72,3.62Z"/></g></g></svg>
												</button>
												
												<button type="button" @click="getProduct(com, index)" class="btn" data-toggle="modal" data-target="#ModalProdCombo">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
												</button>
											</div>
										</div>
										<a href="#" class="product-title">{{com.name}}</a>
										<span class="product-info">{{com.cantTotal}} Productos</span>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<ModalCombo :tasadolar="tasadolar" :combo="combo" :index="index"></ModalCombo>
	</section>
</template>
<script>
	import ModalCombo from './ModalCombo.vue';
	import LazyImg from './LazyImg.vue';
	export default {
		data() {
			return {
				combo: {},
				index: -1,				
			}
		},
		props: {
			combo_product: Array,
			tasadolar: Number
		},
		components: {
			ModalCombo,
			LazyImg
		},
		methods: {
			getProduct: async function(objP, index) {
				console.log("objP::> ",objP);
				this.combo = objP;
				this.index = index;
			},
			up(v, n){
				return Math.ceil(v * Math.pow(10, n)) / Math.pow(10, n);
			}
		},
		mounted() {
			
		}
	}
</script>