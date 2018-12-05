<template>
    <form method="POST" @submit.prevent="submitFormNewAccount" aria-label="Register" novalidate>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" v-bind:class="[errorClass.name ? 'is-invalid' : '', 'form-control']" name="name" v-model='form.name' required autofocus>

                <span class="invalid-feedback" role="alert">
                    <strong v-if="errors.name" v-text="errors.name[0]" ></strong>
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

            <div class="col-md-6">
                <input id="emailRegister" type="email" v-bind:class="[errorClass.email ? 'is-invalid' : '', 'form-control']" name="email" v-model='form.email' required>

                <span class="invalid-feedback" role="alert">
                    <strong v-if="errors.email" v-text="errors.email[0]" ></strong>
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="passwordRegister" type="password" v-bind:class="[errorClass.password ? 'is-invalid' : '' , 'form-control']" name="password" v-model='form.password' required>

                <span class="invalid-feedback" role="alert">
                    <strong v-if="errors.password" v-text="errors.password[0]" ></strong>
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="passwordRegister-confirm" type="password" class="form-control" v-bind:class="[errorClass.password_confirmation ? 'is-invalid' : '' , 'form-control']" name="password_confirmation" v-model='form.password_confirmation' required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    S'inscrire
                </button>
            </div>
        </div>
    </form>

</template>

<script>
    export default {
        name: "newAccountComponent",

        data () {

            return {

                form: {

                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: ''

                },

                errors: {},

                errorClass: {

                    name: '',
                    email: '',
                    password: ''

                },
            }
        },

        methods: {
            submitFormNewAccount() {
                axios.post('/register', this.form)

                    .then((result) => {
                        console.log(result),
                            this.form.name = "",
                            this.form.email = "",
                            this.form.password = "",
                            this.form.password_confirmation = "",

                            this.errorClass.name = '',
                            this.errorClass.email = '',
                            this.errorClass.password = '',
                            window.location.href = "https://ctgl.moh-warzone.fr/";
                    })
                    .catch(error => {

                        console.log(error.response)
                        this.errors = error.response.data.errors

                        if(this.errors.name)
                        {
                            this.errorClass.name = "is-invalid"
                        }else {
                            this.errorClass.name = ""
                        }

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
            }
        }

    }
</script>

<style scoped>

</style>
