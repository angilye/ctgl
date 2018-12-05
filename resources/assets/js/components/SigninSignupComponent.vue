<template>
    <div>
        <div class="modal fade" id="ModalCenterLogin" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p id="btn-signin" class="btn-active" >Connexion</p>
                        <p id="btn-signup" class="btn-inactive" >Inscription</p>
                    </div>
                    <div class="modal-body">
                        <div id="formLogin">
                            <login-component :routelogin="routelogin" :routeforgetmdp="routeforgetmdp"></login-component>
                        </div>
                        <div id="formRegister">
                            <new-account-component></new-account-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>

    import loginComponent from './loginComponent.vue'
    import newAccountComponent from './newAccountComponent.vue'

    export default {
        name: "SigninSignupComponent",

        component: { loginComponent, newAccountComponent },

        props: ['routelogin','routenewaccount','routeforgetmdp'],

        data () { // creation des variables local au component

            return {
                'isActive' : true,
            }

        },

        methods: { // la ou se regroupe toute les fonctions local au Component.


        },

    }
</script>

<style scoped>

</style>
