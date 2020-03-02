/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.EventBus = new Vue();

/**
 * Detectar URL automaticamente del servidor
 */
const host = window.location.host;
const path = window.location.pathname.split("/")[1];
const protocolo = window.location.protocol;
window.URLSERVER = protocolo+"//"+host+"/";
window.URLHOME = protocolo+"//"+host+"/";

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('nuestros-productos', require('./components/ProductFilterComponent.vue').default);
Vue.component('slider', require('./components/Slider.vue').default);
Vue.component('footer-ad', require('./components/Footer.vue').default);
Vue.component('ads', require('./components/Ads.vue').default);
Vue.component('offers', require('./components/Offers.vue').default);
Vue.component('combos', require('./components/Combos.vue').default);
Vue.component('header-menu', require('./components/Header.vue').default);
Vue.component('catalog', require('./components/Catalog.vue').default);
Vue.component('profile', require('./components/profile.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('register', require('./components/Register.vue').default);

// Vue.component('modal-producto',require('./components/ModalProducto.vue').default,{ props:{product: Object} });
Vue.component('modal-combo', require('./components/ModalCombo.vue').default);

Vue.filter('FormatNumber',function(num) {
    num = parseFloat(num).toFixed(2);
    const arrNum = num.split(".");
    const decimal = arrNum[1];
    return arrNum[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")+","+decimal;
});

Vue.filter('FormatDolar',function(num) {
    return parseFloat(num).toFixed(2);
});


Vue.filter('MediumImage',function(imageText) {
    imageText = imageText.split('.');
    let newImageText = imageText[0]+'-medium.'+imageText[1];
    return newImageText;
});

var globalFunc = {
    addToFavorite: function(product,user_id) {
        let products_id = product.id;
        console.log("product::> ",products_id);
        console.log("user_id::> ",user_id);
        axios.post(URLHOME+'api/favorites', {
            products_id: products_id,
            user_id: user_id
        })
        .then(function (response) {
            console.log(response.data);
            if(response.data == 'error') {
                //alert("debe estar logeado para agregar a favoritos");
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Debes estar logueado para agregar a favoritos',
                    //footer: '<a href>Why do I have this issue?</a>'
                });
            }else {
                EventBus.$emit("update_cantFavorite",response.data);
            }
            
        })
        .catch(function (error) {
            console.log(error);
        });
    },

    addToCart: function(product,cantidad) {
        let cart = [];
        if(window.localStorage.getItem('cartNew')) {
            cart = JSON.parse(window.localStorage.getItem('cartNew'));
        }
        cart = globalFunc.validateCart(product,cart,cantidad);
        window.localStorage.setItem('cartNew', JSON.stringify(cart));
        console.log("cart::> ",cart);
        const cantUpdate = globalFunc.getCartCant(cart);
        console.log("cantUpdate::> ",cantUpdate);
        EventBus.$emit("update_cantCart",cantUpdate);
    },
    validateCart: function(product,tmp,cantidad) {
        let exist = false;
        tmp.forEach( (a,b) => {
            if (a.product.id == product.id) {
                tmp[b] = parseInt(tmp[b].cant) + cantidad;
                exist = true;
            }
        });
        if(!exist) {
            tmp.push({product: product,cant: cantidad});
        }
        return tmp;
    },
    getCartCant: function(cart) {
        let cant = 0;;
        cart.forEach( (a) => {
            cant += a.cant
        });
        return cant;
    },
    removeCart(index) {
        this.products_cart.splice(index,1);
        localStorage.setItem('cartNew', JSON.stringify(this.products_cart));
        this.cant_cart = this.products_cart.length;
        this.total_cart = 0;
        this.updateCartTotal();
        EventBus.$emit("update_cantCart",this.products_cart.length);
    },
    updateCartTotal()
    {

            if( window.localStorage.getItem("cartNew") ){
                this.cant_cart = JSON.parse(window.localStorage.getItem("cartNew")).length;
                this.products_cart = JSON.parse(window.localStorage.getItem("cartNew"));
                console.log(this.products_cart);
            }else{
                this.cant_cart = 0;
            }
            //For para sacar el total del carro de compras
            for(let i = 0; i<this.cant_cart; i++)
            {
                if(this.products_cart[i].product.discount>0)
                {
                    this.total_cart+=parseFloat(this.products_cart[i].product.discount) * parseInt(this.products_cart[i].cant);
                }else{
                    this.total_cart += parseFloat(this.products_cart[i].product.price) * parseInt(this.products_cart[i].cant);
                }
            }
    }
}

Vue.prototype.addToFavorite = globalFunc.addToFavorite; 
Vue.prototype.addToCart = globalFunc.addToCart;
Vue.prototype.removeCart = globalFunc.removeCart;



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});