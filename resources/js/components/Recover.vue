<template>
    <div class="register-form">
        <form action="" class="">
            <h2 class="form-title">Recuperar Cuenta</h2>
            <div v-if="!!first">
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="text" class="form-control" id="email" name="email" v-model="email">
                </div>
                
                <div class="form-group">
                    <button class="btn" type="button" @click="sendEmail()">Recuperar Cuenta</button>
                </div>
            </div>
            <div v-if="!!second">
                <div class="form-group">
                    <label for="email">Código de recuperación:</label>
                    <input type="text" class="form-control" id="email" name="email" v-model="codigo">
                </div>
                
                <div class="form-group">
                    <button class="btn" :disabled="sending" type="button" @click="CheckCode()">Validar código</button>
                </div>
            </div>
            <div v-if="!!second">
                <div class="form-group">
                    <label for="email">Nueva clave:</label>
                    <input type="text" class="form-control" id="email" name="email" v-model="password">
                </div>

                <div class="form-group">
                    <label for="email">Repita su clave:</label>
                    <input type="text" class="form-control" id="email" name="email" v-model="samepassword">
                </div>
                
                <div class="form-group">
                    <button class="btn" :disabled="sending" type="button" @click="changePassword()">Cambiar clave</button>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
    export default{
        data() {
            return {
                email: '',
                codigo: '',
                password: '',
                samepassword: '',
                sending: false,
                first: true,
                second: false,
                third: false
            }
        },
        props: {
            userlogged: Object
        },
        methods: {
            CheckCode(){
                const formData = new FormData();
                formData.append("email",this.email);
                formData.append("codigoCorreo",this.codigo);

            },
            changePassword() {
                const formData = new FormData();
                formData.append("email",this.email);
                formData.append("codigoCorreo",this.codigo);
                formData.append("password",this.password);
            },
            sendEmail() {
                if(this.email.trim() != '') {
                    this.sending = true;
                    axios.post(URLHOME+'api_rapida.php?evento=enviarCodRecuperacion&email='+this.email).then( (data) => {
                        Swal.fire("Bio en línea","Por favor revise su correo en bandeja de entrada o spam","success").then( result => {
                            console.log(this.first);
                            console.log(this.second);
                            console.log(this.sending);

                            this.first = false;
                            this.second = true;
                            this.sending = false;
                        });
                    }).catch(err => {
                        console.log("err::> ",err);
                        if(!!err) {
                            this.sending = false;
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: "Intente nuevamente",
                            });
                        }
                    });
                }else{
                    this.sending = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Todos los campos son obligatorios',
                    });
                }
            }
        }
    }
</script>