<template>
    <section id="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 category-box">
					<div class="category-img" :style="{backgroundImage: backgrounds[0]}">
						<div class="category-content">
							<h3>Verduras, Frutas<br> y Hortalizas</h3>
							<a href="#">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
				</div>
				<div class="col-12 category-box category-box-middle">
					<div class="category-img" :style="{backgroundImage: backgrounds[1]}">
						<div class="category-content">
							<h3>Bebidas</h3>
							<a href="#">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
				</div>
				<div class="col-12 category-box category-box-double">
					<div class="category-img category-img-first" :style="{backgroundImage: backgrounds[2]}">
						<div class="category-content">
							<h3>Quesos y Charcuteria</h3>
							<a href="#">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
						</div>
					</div>
					<div class="category-img category-img-last" :style="{backgroundImage: backgrounds[3]}">
						<div class="category-content">
							<h3>Pollos y Carnes</h3>
							<a href="#">Ver todos los productos <img src="assets/img/boton-circular-bio.svg"></a>
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
		getAds: async function() {
            const response = await axios.get(URLSERVER+'api/advs/type/medio');
			const medio = response.data.data;
			this.backgrounds.push('url(storage/'+medio[0].image+')');
			this.backgrounds.push('url(storage/'+medio[1].image+')');
			this.backgrounds.push('url(storage/'+medio[2].image+')');
			this.backgrounds.push('url(storage/'+medio[3].image+')');
        }
    },
    mounted() {
        this.getAds();
    }
}
</script>
