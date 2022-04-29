<template>
    <div>      
        <HeaderComponent v-bind="{getTypes, }"></HeaderComponent>
        <QuickView></QuickView>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import QuickView from './components/modals/QuickView.vue'
    import HeaderComponent from './components/layouts/HeaderComponent.vue'
    import FooterComponent from './components/layouts/FooterComponent.vue'
    import {mapGetters, mapActions} from 'vuex'
    export default {             
        components: {
            HeaderComponent,
            FooterComponent,
            QuickView,
        },
        
        computed: {
            ...mapGetters('auth', ['userInfo']),
            ...mapGetters('client', ['getTypes']),
        },                        
    }
</script>