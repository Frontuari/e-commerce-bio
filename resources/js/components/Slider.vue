<template>    
    <section id="main-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li v-for="(slider, index) in sliders" v-bind:key="slider.id" data-target="#carouselExampleIndicators" :data-slide-to="index" v-bind:class="{'active': index == 0}"></li>
            </ol>
            <div class="carousel-inner">
                <div v-bind:class="{'carousel-item': true,'active': index == 0}" v-for="(slider,index) in sliders" v-bind:key="slider.id">
                    <img class="d-block w-100" :src="'storage/'+slider.image" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption caption-left" v-if="slider.text_position=='left'">
                            <h5>¡Aprovecha nuestros combos!</h5>
                            <h2>Carnes <img src="assets/img/icono-bio.svg" class="ico-text">io</h2>
                            <p>Compra una gran variedad de tipos <br>de carnes a un excelente precio.</p>
                            <a href="#" class="btn">Comprar</a>
                        </div>

                        <div class="carousel-caption caption-right" v-else>
                           <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</template>
<script>
    export default {
        data() {
            return {
                sliders: []
            }
        },
        methods: {
            getSliders: async function() {
				const response = await axios.get(URLSERVER+'api/advs/type/top');
                this.sliders = response.data.data;
                console.log(this.sliders);
			},
        },
        mounted() {
            this.getSliders();
        }
    }
</script>