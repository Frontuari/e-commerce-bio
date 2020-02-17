<template>
    <div class="register-form">
        <form action="" class="">
            <h2 class="form-title">Crear Cuenta</h2>
            <div class="gender">
                <label>Seleccione sexo</label>
                <div class="form-check form-check-radio">
                    <input type="radio" class="form-check-input" id="man" name="gender">
                    <label for="man" class="custom-check"><span></span>Hombre</label>
                </div>
                <div class="form-check form-check-radio">
                    <input type="radio" class="form-check-input" id="women" name="gender">
                    <label for="women" class="custom-check"><span></span>Mujer</label>
                </div>
            </div>
            <div class="form-group">
                <label for="username">Nombre de usuario:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password2">Repite la contraseña:</label>
                <input type="text" class="form-control" id="password2" name="password2">
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
                <button class="btn" type="submit">CREAR CUENTA</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                datos: ''
            }
        },
        methods: {

        }
    }
</script>