<template>

    <header id="myHeader">
    	<div class="col-md-12 text-center" style="padding: 12px 0px 1px 0px !important; background: #67be5a;">
			<p><b style="color:white; font-weight: bold;">Tienda Actual:</b> <a title="Click para cambiar Tienda" href="/store-state" style="font-size:14px; font-weight:bold; color:#ed3928; border:1px solid white; padding: 5px; border-radius:4px !important;">{{ stName }}</a></p>
		</div>
		<div class="middle-header">
			<div class="container-fluid container-movil">
				<div class="row align-items-center-md">
					<div id="toggler-header" class="col-3">
						<button class="navbar-toggler toggle-menu" type="button">
							<img src="/assets/img/menu-movil-bio.png" alt="Menu Bars">
						</button>
					</div>
					<div id="brand-header" class="col-lg-1 col-4">
						<a  href="/" class="navbar-brand"><img  src="/img/logo.png" alt="Bio Mercados"></a>
					</div>

					<div id="search-header" class="col-lg-7 col-md-12">
						<form class="form-inline" v-on:submit="search()">
							<input class="form-control" id="bio-search" type="text" placeholder="Busque aquí..." aria-label="Search" v-on:input="SearchProducts($event)" v-model="searchText" autocomplete="off">
							<button class="btn btn-search" type="button" @click="search()"><img src="/assets/img/visualizar-producto-bio.svg"></button>
							<div class="keyup_search" :style="{ display: dSearch }">
								<span  :style="{display: gifSearch}">Cargando.....</span>
								<ol>
									<li v-for="ser in searched" :key="ser.id" @click="goToCatalog(ser.id)">
										<img v-if="ser.photo != null" :style="{width: '6%'}" :src="'storage/'+JSON.parse(ser.photo)[0] | MediumImage">
										{{ser.name}}
									</li>
								</ol>
							</div>

						</form>
					</div>
					
					<div id="nav-header" class="col-lg-4 col-5">
						<ul>
							<li id="nav-login" class="dropdown">
								<a href="#" v-if="!userlogged" id="navbarLogin" class="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="link-text">Entrar / Registrarse</span> <img src="/assets/img/login-bio.png" alt="Login">
								</a>
								<div class="dropdown-menu  login_navbar" aria-labelledby="navbarLogin">
									<form action="#">
										<h3>Acceder a la cuenta</h3>
										<div class="form-group">
											<label>Correo electrónico</label>
											<input type="text" class="form-control" name="email" v-model="user.email">
										</div>
										<div class="form-group">
											<label>Contraseña</label>
											<input type="password" class="form-control" name="password" v-model="user.pass" @keypress="enterLogin($event)">
										</div>
										<div class="form-group">
											<input type="checkbox"> Recordar Contraseña
										</div>
										<div class="form-group">
											<button type="button" @click="login()" class="btn">Entrar</button>
										</div>
										<div class="form-group form-group-register">
											<small>¿No tienes cuenta? <a  href="/join" class="white">Registrate aquí</a></small>
											<small><a href="/recover" class="white">Olvidó su Contraseña?</a></small>
										</div>
									</form>
								</div>
							</li>
							
							<li id="nav-logged" v-if="!!userlogged">
								<a href="/profile"><img :src="userlogged.avatar" alt="User" style="margin-left:15px !important;"><span class="link-text" v-if="!!userlogged"> {{userlogged.name}}</span></a> 
								<a href="javascript:void(0)" @click="logout()" class="logout">
									<img src="/assets/img/icono-salir-bio.png">
								</a>
							</li>
							
							
							<li id="nav-cart" data-toggle="tooltip" data-placement="bottom" title="Haga click para ver el carrito">
								<a href="/cart"><img src="/assets/img/carrito-de-compras-bio.png" alt="Cart"><span class="quantity-span">{{cant_cart}}</span></a>
							</li>

							<li id="nav-fav" v-if="userlogged" data-toggle="tooltip" data-placement="bottom" title="Haga click para ver sus favoritos">
								<a href="/profile?tab=my-favorites"><img src="/assets/img/favoritos-bio.png" alt="Favorites"><span class="quantity-span">{{cant_favorite}}</span></a>
							</li>
							<li id="nav-fav" data-toggle="tooltip" data-placement="bottom"  v-if="!!userlogged">
								<a href="#" style="background: #ED3928; border-radius: 8px; padding-right: 8px;"><img src="/assets/img/icono-puntos-bio.svg" style="width: 25px !important; height: 25px !important; padding: 5px;" alt="Bio Wallet"><span class="quantity-span">{{saldo}}</span></a>
							</li>

						</ul>

					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" v-for="cat in categories.slice(0,12)" :key="cat.id" :style="'background:url(/storage/'+cat.image+'); baground-repeat: no-repeat; background-size: auto;'">
					<a class="new-cat" :href="'/catalog?cat='+cat.id">{{ cat.name }}</a>
				</div>
			</div>
		</div>
	</header>
</template>
<script>
export default {
    data() {
        return {
			cant_cart: 0,
			cant_favorite: 0,
			saldo: 0,
			categories: [],
			products: [],
			searched: {},
			dSearch: 'none',
			gifSearch:'none',
			searchText: '',
			user: {
				name: '',
				email: '',
				pass: ''
			},
			logged: false,
			stName: '',
			stID:''
        }
	},
	props: {
		userlogged: Object
	},
    methods: {
    	getAmountBW: function(){
    		if(this.userlogged){
    			axios.get(URLHOME+'api/getAmountBW/'+this.userlogged.id).then( datos => {
	    			this.saldo = datos.data;
	    		});
    		}
    	},
		search() {
			const route = "/catalog?search="+this.searchText;
			window.location.href = route;
			event.preventDefault();
		},
		goToCatalog(id) {
			const route = "/catalog?id="+id;
			window.location.href = route;
			event.preventDefault();
		},
        async getCategories() {
			const response = await axios.get(URLSERVER+"api/categories");
			this.categories = response.data.data;
		},
		async SearchProducts(e) {
			const len = e.target.value.length;
			let loader = this.gifSearch;
			const val = e.target.value;
			this.searched = {};
			if(len >= 3) {
				this.gifSearch = 'block';
				const response = await axios.get(URLSERVER+"api/products/search/"+val);
				this.searched = response.data.data;
				this.dSearch = 'block';
				this.gifSearch = 'none';

			} else {
				this.dSearch = 'none';
				this.gifSearch = 'none';
				
			}
		},
		async getFavorites() {
			const response = await axios.get(URLSERVER+"api/favorites");
			if(response.data.data.length > 0) {
				this.cant_favorite = response.data.data.length;
			}else {
				this.cant_favorite = 0;
			}
		},
		enterLogin(event) {
			//13 es igual a enter
			if(event.keyCode == 13 || event.key=="Enter") {
				this.login();
			}
		},
		login() {
			axios.get(URLSERVER+"api_rapida.php?evento=login&email="+this.user.email+"&password="+this.user.pass).then( (response) => {
				if(response.data.success == false)
				{
					Swal.fire({
					  icon: 'error',
					  title: 'Error',
					  text: response.data.msj_general,
					});
				}else{
					location.href = window.location.href;
				}
			}).catch(err => {
				if(err.response.data.success == false)
				{
					Swal.fire({
					  icon: 'error',
					  title: 'Error',
					  text: "Usuario y/o clave incorrecta",
					});
				}
			});
			
		},
		logout()
		{
			localStorage.clear();
			localStorage.setItem('ModalPrincipal','visto');
			axios.get(URLSERVER+"api_rapida.php?evento=logout").then( () => {
				location.href = URLSERVER;
			});
		}
    },
    created() {
        EventBus.$on('update_cantCart', data => {
            this.cant_cart = data;
		});
		
		EventBus.$on('update_cantFavorite', data => {
            this.cant_favorite = data;
        });
    },
    mounted() {
    	this.stName = storeName;
    	this.stID = storeId;
		this.getCategories();
		this.getFavorites();
		this.getAmountBW();
		if( window.localStorage.getItem("cartNew") ){
			const _this = this;
			JSON.parse(window.localStorage.getItem("cartNew")).forEach ( (a) => {
				_this.cant_cart += parseInt(a.cant);
			});
		}else{
			this.cant_cart = 0;
		}
    }
}
</script>
