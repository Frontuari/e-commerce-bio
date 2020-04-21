<template>
    <section id="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 category-box">
					<div class="category-img" :style="{backgroundImage: backgrounds[0]}">
						<div class="category-content">
							<h3>{{categories[0].name}}</h3>
							<a :href="'catalog?cat='+categories[0].id">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
				</div>
				<div class="col-12 category-box category-box-middle">
					<div class="category-img" :style="{backgroundImage: backgrounds[1]}">
						<div class="category-content">
							<h3>{{categories[1].name}}</h3>
							<a :href="'catalog?cat='+categories[1].id">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
				</div>
				<div class="col-12 category-box category-box-double">
					<div class="category-img category-img-first" :style="{backgroundImage: backgrounds[2]}">
						<div class="category-content">
							<h3>{{categories[2].name}}</h3>
							<a :href="'catalog?cat='+categories[2].id">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
					<div class="category-img category-img-last" :style="{backgroundImage: backgrounds[3]}">
						<div class="category-content">
							<h3>{{categories[3].name}}</h3>
							<a :href="'catalog?cat='+categories[3].id">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
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
			backgrounds: []
        }
    },
    methods: {
		getcategories: function() {

			this.categories.forEach( (a,b) => {
				// const img = a.image.replace("\\","/");
				console.log("a.image::> ",a.image);
				this.backgrounds.push('url(storage/'+a.image+')');
			});
			
			// this.backgrounds.push('url(storage/'+this.categories[0].image+')');
			// this.backgrounds.push('url(storage/'+this.categories[1].image+')');
			// this.backgrounds.push('url(storage/'+this.categories[2].image+')');
			// this.backgrounds.push('url(storage/'+this.categories[3].image+')');
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
