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
        methods: {
            ...mapActions('client', ['getType', 'getProduct']),
        },
        computed: {
            ...mapGetters('auth', ['userInfo']),
            ...mapGetters('client', ['getTypes']),
        },  
        created() {
            // Lấy toàn bộ data của types và products
            let uri = 'http://127.0.0.1:8000/api/client/getClient';
            this.axios.get(uri).then(response => {
                this.getType(response.data.types); 
                this.getProduct(response.data.products);
            });
            
            
        },
            
        
        
                                    
    }
</script>