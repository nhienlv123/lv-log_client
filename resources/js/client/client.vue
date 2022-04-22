<template>
    <div>
        <!-- <HeaderComponent v-bind="{isLoged, userInfo}"></HeaderComponent> -->
        <HeaderComponent></HeaderComponent>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import HeaderComponent from './components/layouts/HeaderComponent.vue'
    import FooterComponent from './components/layouts/FooterComponent.vue'
    // import {mapGetters} from 'vuex'
    export default {             
        components: {
            HeaderComponent,
            FooterComponent,
        },
        // computed: {
        //     ...mapGetters('auth', ['isLoged', 'userInfo'])
        // },                              
    }
</script>