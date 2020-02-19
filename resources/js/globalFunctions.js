export const addToFavorite = {
    addToFavorite : (product,user_id) => {
        let products_id = product.id;
        axios.post(URLHOME+'api/favorites', {
            products_id: products_id,
            user_id: user_id
        })
        .then(function (response) {
            console.log(response);
            //AQUI FALTA TRAERSE LA CANTIDAD DE FAVORITOS
            // EventBus.$emit("update_cantFavorite",cart.length);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
}

export const addToCart = {
    addToCart: (product) => {
        let cart = [];
        if(localStorage.getItem('cartNew')){
            cart = JSON.parse(localStorage.getItem('cartNew'));
        }

        cart = (product,tmp) => {
            let exist = false;
            tmp.forEach( (a,b) => {
                if (a.product.id == product.id) {
                    tmp[b].cant++;
                    exist = true;
                }
            });
            if(!exist) {
                console.log("entro por aqui porque es primera vez");
                tmp.push({product: product,cant: 1});
            }
            return tmp;
        }

        localStorage.setItem('cartNew', JSON.stringify(cart));
        EventBus.$emit("update_cantCart",cart.length);
    }
}