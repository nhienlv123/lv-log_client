<template>
<div>
    <div class="container-fluid bg-dark mb-1" v-if="isLoged">
        <div class="container">
            <nav class="navbar navbar-dark">
                <router-link :to="{name: 'home'}">
                    <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                </router-link>
                <span class="navbar-brand mb-0 h1">Welcome {{userInfo.name}} !!</span>
                <div>
                    <router-link :to="{name: 'signin'}">                   
                        <button class="btn btn-success" @click="signout">Sign out</button>
                    </router-link>
                </div>                
            </nav>
        </div>
    </div>
    <div class="container-fluid bg-dark mb-1" v-else>
        <div class="container">
            <nav class="navbar navbar-dark">
                <router-link :to="{name: 'home'}">
                    <span class="navbar-brand mb-0 h1">Vue Laravel SPA</span>
                </router-link>
                <div>
                    <router-link :to="{name: 'signin'}">
                        <button class="btn btn-success">Sign in</button>
                    </router-link>   
                    <router-link :to="{name: 'signup'}">              
                        <button class="btn btn-success">Sign up</button>
                    </router-link>   
                </div>
            </nav>
        </div>
    </div>
</div>
</template>

<script>
    import {mapActions} from 'vuex'
    export default {        
        props: {
            userInfo: { type: Object},
            isLoged: { type: Boolean},
        },
        methods: {
            ...mapActions('auth', ['signout'])
        }
    }
</script>