<template>
    <section id="categories">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<a :href="'catalog?cat='+categories[0].id" class="link-category"><div class="category-img" :style="{backgroundImage: backgrounds[0],backgroundSize: 'auto'}"></div></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<a :href="'catalog?cat='+categories[1].id" class="link-category"><div class="category-img" :style="{backgroundImage: backgrounds[1], backgroundSize: 'auto'}"></div></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<a :href="'catalog?cat='+categories[2].id" class="link-category"><div class="category-img" :style="{backgroundImage: backgrounds[2], backgroundSize: 'auto'}"></div></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<a :href="'catalog?cat='+categories[3].id" class="link-category"><div class="category-img" :style="{backgroundImage: backgrounds[3], backgroundSize: 'auto'}"></div></a>
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
