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
    import Breadcumb from './components/Breadcump.vue'
    import ProductDetail from './components/ProductDetail.vue'
    import ProductRelate from './components/ProductRelate.vue'
    export default {             
        components: {
            Breadcumb,
            ProductDetail,
            ProductRelate,
        },                                   
    }
</script>