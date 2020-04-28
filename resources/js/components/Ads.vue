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
