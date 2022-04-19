<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <router-view></router-view>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import HeaderComponent from './HeaderComponent.vue'
    import {mapMutations, mapActions, mapState, mapGetters} from 'vuex'
    export default {     
        components: {
            HeaderComponent,
        },   
        computed: {            
            ...mapGetters('auth', ['userInfo'])
        }               
    }
</script>