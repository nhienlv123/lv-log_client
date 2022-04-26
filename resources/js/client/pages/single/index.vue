<template>
    <div>
        <Breadcumb></Breadcumb>
        <ProductDetail></ProductDetail>
        <ProductRelate></ProductRelate>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import {mapActions} from 'vuex'
    import Breadcumb from './components/Breadcump.vue'
    import ProductDetail from './components/ProductDetail.vue'
    import ProductRelate from './components/ProductRelate.vue'
    export default {             
        components: {
            Breadcumb,
            ProductDetail,
            ProductRelate,
        },  
        mounted() {
            return console.log(this.$route.params.productId);
        },
        methods: {
            ...mapActions('client', ['selectProduct']),
        },
        created() {
            let uri1 = `http://127.0.0.1:8000/api/client/getProductInfo/${this.$route.params.productId}`;
            this.axios.get(uri1).then(response => {
                // console.log(response.data.data);  
                this.selectProduct(response.data.data)         
            })
        },                                 
    }
</script>