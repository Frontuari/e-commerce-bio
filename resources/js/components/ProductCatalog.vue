<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xm-12" v-for="product in products.data" v-bind:key="product.id">
                    <div class="product-block" style="position: relative !important;">

                        <span :class="'globito product_'+product.id">{{ getCurrentQty(product.id) }}</span>

                        <div class="product-img">
                            <LazyImg v-if="product.photo != null" :source="'storage/'+JSON.parse(product.photo)[0] | MediumImage"></LazyImg>
                            <div class="product-actions">
                                <button type="button" class="btn" @click="addToFavorite(product,user_id)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.93 15"><title>añadir-favorito-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M4.7,7.56a.42.42,0,0,1-.42-.42V3.5H14.51a.43.43,0,0,1,0,.85H5.13V7.14A.42.42,0,0,1,4.7,7.56Z"/><path class="cls-1" d="M14.93,15H7.19a.43.43,0,0,1,0-.85h6.9V5.09a.42.42,0,1,1,.84,0Z"/><path class="cls-1" d="M11.53,6a.42.42,0,0,1-.42-.43V2a1,1,0,0,0-.43-.84A1.86,1.86,0,0,0,9.6.85C9,.85,8,1.15,8,2V5.53a.42.42,0,1,1-.84,0V2A2.18,2.18,0,0,1,9.6,0,2.12,2.12,0,0,1,12,2V5.53A.43.43,0,0,1,11.53,6Z"/><path class="cls-1" d="M8.74,8.11a2.23,2.23,0,0,0-1.63-.77A3.6,3.6,0,0,0,4.7,8.39,3.58,3.58,0,0,0,2.3,7.34a2.23,2.23,0,0,0-1.63.77A2.51,2.51,0,0,0,0,10.31C.32,12,2,13.69,4.52,15a.39.39,0,0,0,.18,0,.41.41,0,0,0,.19,0c2.57-1.27,4.2-3,4.48-4.65A2.51,2.51,0,0,0,8.74,8.11Zm-.21,2.06c-.1.66-.7,2.34-3.83,3.93C1.57,12.51,1,10.83.87,10.17a1.68,1.68,0,0,1,.4-1.47h0a1.39,1.39,0,0,1,1-.51h0a3.14,3.14,0,0,1,2,1.09.44.44,0,0,0,.6,0A3.15,3.15,0,0,1,7.09,8.18a1.41,1.41,0,0,1,1,.51h0A1.63,1.63,0,0,1,8.53,10.17Z"/></g></g></svg>
                                </button>
                                <button type="button" @click="getProduct(product)" class="btn" data-toggle="modal" data-target="#ModalProd">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.03 15"><title>visualizar-producto-bio</title><g id="Capa_2" data-name="Capa 2"><g id="Guias_y_recursos" data-name="Guias y recursos"><path class="cls-1" d="M5.77,11.54A5.77,5.77,0,0,1,1.69,1.69,5.77,5.77,0,0,1,9.85,9.85,5.74,5.74,0,0,1,5.77,11.54ZM5.77.77A5,5,0,1,0,9.3,2.23,5,5,0,0,0,5.77.77Z"/><path class="cls-1" d="M14.64,15a.4.4,0,0,1-.27-.11l-5.06-5a.37.37,0,0,1,0-.54.39.39,0,0,1,.55,0l5.06,5a.39.39,0,0,1,0,.55A.39.39,0,0,1,14.64,15Z"/></g></g></svg>
                                </button>
                            </div>
                        </div>

                        <a href="#" class="product-title" v-if="!product.name_insuperable">{{ product.name }}</a>
                        <a href="#" class="product-title" v-if="product.name_insuperable" v-html="product.name_insuperable"></a>

                        <span class="product-info">({{product.qty_avaliable}} Disponibles )</span>
                        <div class="product-prices" v-if="product.impuesto > 0">
                            <p>IVA INCLUIDO</p>
                        </div>
                        <div class="product-prices" v-if="!product.impuesto">
                            <p>EXENTO DE IVA</p>
                        </div>
                        <div class="product-prices" v-if="product.impuesto > 0">
                            <p>{{ product.calculado | FormatNumber }} Bs</p>
                            <p>{{ (up((product.calculado / tasadolar), 2)) | FormatDolar}} $</p>
                        </div>
                        <div class="product-prices" v-if="!product.impuesto">
                            <p>{{ product.price | FormatNumber }} Bs</p>
                            <p>{{ (up((product.price / tasadolar), 2)) | FormatDolar}} $</p>
                        </div>

                        <div :class="'row content_product_control_'+product.id" :style="getCurrentQty(product.id) > 0 ? 'display:block;' : 'display:none;'">
                                    
                            <div class="col-12 text-center" style="padding: 10px 50px !important;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button @click="delProduct('product_category_'+product.id, product);" class="btn btn-decrement btn-outline-secondary btn-minus">-</button>
                                      </div>
                                    <input type="number" style="text-align: center;" min="0" :id="'product_category_'+product.id" :value="getCurrentQty(product.id) == 0 ? 1 : getCurrentQty(product.id)" :class="'cart-add-button form-control add_del_'+product.id" @change="addProductIncrement($event, product);" :max="product.qty_avaliable" />
                                    <div class="input-group-append">
                                        <button @click="addProduct('product_category_'+product.id, product, product.qty_avaliable);" class="btn btn-increment btn-outline-secondary btn-plus">+</button>
                                      </div>
                                </div>
                            </div>

                        </div>

                        <div :class="'row content_product_button_'+product.id" v-if="getCurrentQty(product.id) == 0"  style="padding: 10px 80px !important;">
                            <div class="col-12 text-center">
                                <button class="btn btn-success" @click="addToCart(product,1)">Agregar</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <!--<ul>
                            <li v-if="!!products.prev_page_url">
                                <a href="javascript:void(0)" @click="getpage(products.current_page - 1)"><img src="assets/img/prev.png" alt="Prev"></a>
                            </li>

                            <li v-for="index in products.last_page" :key="index">
                                <a href="javascript:void(0)" @click="getpage(index)" :class="products.current_page == index ? 'active' : ''">
                                    {{index}}
                                </a>
                            </li>

                            <li v-if="!!products.next_page_url">
                                <a href="javascript:void(0)" @click="getpage(products.current_page + 1)"><img src="assets/img/next.png" alt="Next"></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>

        <ModalProducto :tasadolar="tasadolar" :product="oneproduct" :user_id="user_id"></ModalProducto>
    </div>
</template>
<script>
    import ModalProducto from './ModalProducto.vue';
    import LazyImg from './LazyImg.vue';

    export default {
        data() {
            return {
                oneproduct: {},
                page: 1,
                cant_product:[]
            }
        },
        components:{
			ModalProducto,
            LazyImg
        },
        methods: {
            getProduct: function(objP) {
                console.log(objP);
				this.oneproduct = objP;
            },
            addProductIncrement: function(event, product){
                this.addToCart(product, event.target.value);
            },
            getpage(index) {
                this.page = index;
                this.$emit("getpage",this.page);
                document.location = '#';
            },
            addProduct(id, product, qtyav){
                let currentQty = parseInt(document.getElementById(id).value);
                let newQty = currentQty;

                if(currentQty < qtyav){
                 newQty = parseInt(currentQty + 1);   
                }

                document.getElementById(id).value = newQty;
                this.addToCart(product, newQty);
                
            },
            delProduct(id, product){
                let currentQty = parseInt(document.getElementById(id).value);
                let newQty = 0
                if(parseInt(currentQty) > 0){
                    newQty = parseInt(currentQty - 1);  
                }
            
                this.addToCart(product, newQty);
            },
            increaseValue(product)
            {
                const productID = product.id;
                const qty_avaliable = product.qty_avaliable;
                if(this.cant_product[productID] < qty_avaliable ) {
                    this.cant_product[productID]++;
                }
                $('.cantidad_'+productID).val(this.cant_product[productID]);
                $('.cantidad_'+productID)[0].dispatchEvent(new CustomEvent('input'));
            },
            decreaseValue(product) {
                const productID = product.id;
                const qty_avaliable = product.qty_avaliable;
                if(this.cant_product[productID] > 1 ) {
                    this.cant_product[productID]--;
                }
                $('.cantidad_'+productID).val(this.cant_product[productID]);
                $('.cantidad_'+productID)[0].dispatchEvent(new CustomEvent('input'));
            },
            up(v, n){
                return Math.ceil(v * Math.pow(10, n)) / Math.pow(10, n);
            }
        },
        mounted(){
            
        },
        created() {
            let products = JSON.parse(window.localStorage.getItem("productos")).data;
            for(let i = 0;i<products.length;i++) {
                this.cant_product[products[i].id] = 1;
            }
        },
        props: {
            products: Object,
            images   : Array,
            tasadolar: Number,
            user_id: String
        }
    }
</script>