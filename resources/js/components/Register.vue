<template>
    <div class="register-form">
        <form action="" class="">
            <h2 class="form-title">Crear Cuenta</h2>
            <div class="gender">
                <label>Seleccione sexo</label>
                <div class="form-check form-check-radio">
                    <input type="radio" class="form-check-input" id="man" name="gender" value="m" v-model="User.sex">
                    <label for="man" class="custom-check"><span></span>Hombre</label>
                </div>
                <div class="form-check form-check-radio">
                    <input type="radio" class="form-check-input" id="women" name="gender" value="f" v-model="User.sex">
                    <label for="women" class="custom-check"><span></span>Mujer</label>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" class="form-control" id="username" name="username" v-model="User.username">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="text" class="form-control" id="email" name="email" v-model="User.email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" v-model="User.password">
            </div>
            <div class="form-group">
                <label for="password2">Repite la contraseña:</label>
                <input type="password" class="form-control" id="password2" name="password2" v-model="User.c_password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms">
                <label for="terms" class="custom-check"><span></span>Acepto los términos y condiciones.</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="allow-offers" name="allow-offers">
                <label for="allow-offers" class="custom-check"><span></span>Deseo recibir notificaciones de productos, ofertas y promociones al correo electrónico.</label>
            </div>
            <div class="form-group">
                <button class="btn" type="button" @click="saveData()">CREAR CUENTA</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                User: {
                    username: '',
                    password: '',
                    c_password: '',
                    email: '',
                    sex: '',
                }
            }
        },
        props: {
            userlogged: Object
        },
        methods: {
            saveData() {
                axios.post(URLHOME+'api/register', {
                    name: this.User.username,
                    password: this.User.password,
                    c_password: this.User.c_password,
                    email: this.User.email,
                    sex: this.User.sex,
                }).then( (data) => {
                    alert("Usuario Registrado Exitosamente");
                    location.href=window.location.href;
                })
            }
        }
    }
</script>