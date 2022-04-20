<template>
    <div>
        <HeaderComponent v-bind="{isLoged, userInfo}"></HeaderComponent>
        <router-view v-bind="{isLoged}"></router-view>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import HeaderComponent from './HeaderComponent.vue'
    import {mapGetters} from 'vuex'
    export default {             
        components: {
            HeaderComponent,
        },
        computed: {
            ...mapGetters('auth', ['isLoged', 'userInfo'])
        },                              
    }
</script>