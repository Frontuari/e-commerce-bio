<template>
    <section id="categories">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="/contact"><div class="category-img" style="background-image: url('assets/img/sucursales/contacto.svg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="/culture"><div class="category-img" style="background-image: url('assets/img/sucursales/cultura.svg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="http://portalproveedores.biomercados.com.ve:18880/webui/"><div class="category-img" style="background-image: url('assets/img/sucursales/portal.svg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="/sucursal"><div class="category-img" style="background-image: url('assets/img/sucursales/sucursales.svg'); background-repeat: no-repeat;"></div></a>
			</div>
		</div>
	</section>
</template>
<script>
export default {
    data() {
        return {
			backgrounds: []
        }
    },
    methods: {
		getcategories: function() {
			this.categories.forEach( (a,b) => {
				this.backgrounds.push('url(storage/'+a.image+')');
			});
        }
    },
    mounted() {
        this.getcategories();
	},
	props: {
		categories: Array
	}
}
</script>
