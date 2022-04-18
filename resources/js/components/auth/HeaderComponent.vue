<template>
<div>
    <div class="container-fluid bg-dark mb-1">
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
    export default {}
</script>