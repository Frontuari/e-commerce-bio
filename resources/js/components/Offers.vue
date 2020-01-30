<template>
    <section id="offers" class="hero" :style="{backgroundImage: backgrounds[0]}">
		<div class="container hero-container">
			<div class="hero-content">
				<h2>GRANDES <span>Ofertas</span></h2>
				<h3>en nuestros productos de</h3>
				<a href="#">VERDURAS, FRUTAS Y HORTALIZAS <img src="assets/img/boton-circular-bio.svg"></a>
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
            const response = await axios.get(URLSERVER+'api/advs/type/medio_bajo');
			const medio = response.data.data;
			this.backgrounds.push('url(storage/'+medio[0].image+')');
        }
    },
    mounted() {
        this.getAds();
    }
}
</script>