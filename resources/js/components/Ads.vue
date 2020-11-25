<template>
    <section id="categories">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><div class="category-img" style="background-image: url('assets/img/sucursales/el_bosque.jpg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><div class="category-img" style="background-image: url('assets/img/sucursales/la_granja.jpg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><div class="category-img" style="background-image: url('assets/img/sucursales/paraparal.jpg'); background-repeat: no-repeat;"></div></a>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<a href="#"><div class="category-img" style="background-image: url('assets/img/sucursales/santa_cecilia.jpg'); background-repeat: no-repeat;"></div></a>
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
