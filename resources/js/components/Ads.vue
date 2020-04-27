<template>
    <section id="categories">
		<div class="container-fluid">
			<div class="row">

				<div class="col-12 category-box">
					<a :href="'catalog?cat='+categories[0].id"><div class="category-img" :style="{backgroundImage: backgrounds[0]}"></div></a>
				</div>

				<div class="col-12 category-box">
					<a :href="'catalog?cat='+categories[1].id"><div class="category-img" :style="{backgroundImage: backgrounds[1]}"></div></a>
				</div>

				<div class="col-12 category-box">
					<a :href="'catalog?cat='+categories[2].id"><div class="category-img" :style="{backgroundImage: backgrounds[2]}"></div></a>
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
				console.log(a);
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
