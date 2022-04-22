<template>
    <div>      
        <HeaderComponent v-bind="{getTypes, }"></HeaderComponent>
        <router-view></router-view>
        <FooterComponent></FooterComponent>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import HeaderComponent from './components/layouts/HeaderComponent.vue'
    import FooterComponent from './components/layouts/FooterComponent.vue'
    import {mapGetters, mapActions} from 'vuex'
    export default {             
        components: {
            HeaderComponent,
            FooterComponent,
        },
        methods: {
            ...mapActions('client', ['getType', 'getProduct']),
        },
        computed: {
            ...mapGetters('auth', ['userInfo']),
            ...mapGetters('client', ['getTypes']),
        },  
        created() {
            let uri = 'http://127.0.0.1:8000/api/client/getType';
            this.axios.get(uri).then(response => {
                this.getType(response.data.types); 
                this.getProduct(response.data.products);
            });
        },
            // let uri = 'http://127.0.0.1:8000/api/client/getProduct';
            // this.axios.get(uri).then(response => {
            //     this.getProduct(response.data);                
            // })
        
        
                                    
    }
</script>