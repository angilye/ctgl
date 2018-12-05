<template>

    <div>

        <form v-if="!forgotPassword" method="POST" @submit.prevent="submitFormLogin" aria-label="Login" novalidate>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" v-bind:class="[errorClass.email ? 'is-invalid' : '', 'form-control']"  v-model='form.email' name="email" required autofocus>

                    <span class="invalid-feedback" role="alert">
                    <strong v-if="errors.email" v-text="errors.email[0]" ></strong>
                </span>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" v-bind:class="[errorClass.password ? 'is-invalid' : '', 'form-control']" v-model='form.password' name="password" required>

                    <span class="invalid-feedback" role="alert">
                    <strong v-if="errors.password" v-text="errors.password[0]" ></strong>
                </span>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">

                    <div >
                        <input  type="checkbox" name="remember" id="remember" v-model="form.remember">
                        <label  for="remember">
                            Se Souvenir de moi
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Connexion
                    </button>

                    <a class="btn btn-link" :href="routeforgetmdp">
                        Mot de passe oublié ?
                    </a>
                </div>
            </div>
        </form>

    </div>

</template>

<script>
    export default {
        name: "loginComponent",

        props: ['routelogin', 'routeforgetmdp'],

        data () {
            return {
                forgotPassword: false,
                form: {
                    email : '',
                    password : '',
                    remember : false,
                },
                errors: {},
                errorClass: {
                    email: '',
                    password: '',
                },
            }
        },

        methods: {
            submitFormLogin() {
                axios.post('/login', this.form)

                    .then((result) => {
                        console.log(result),
                            this.form.email = "",
                            this.form.password = "",
                            this.form.remember = "",

                            this.errorClass.email = '',
                            this.errorClass.password = '',
                            window.location.href = "https://ctgl.moh-warzone.fr/";
                    })
                    .catch(error => {

                        console.log(error.response)
                        this.errors = error.response.data.errors

                        if(this.errors.email)
                        {
                            this.errorClass.email = "is-invalid"
                        }else {
                            this.errorClass.email = ""
                        }
                        if(this.errors.password)
                        {
                            this.errorClass.password = "is-invalid"
                        }else {
                            this.errorClass.password = ""
                        }

                    })

            },

        },
    }
</script>

<style scoped>

</style>
