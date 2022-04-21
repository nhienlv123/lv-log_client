<template>
    <div>
        <Breadcumb></Breadcumb>
        <ProductDetail></ProductDetail>
        <QuickView></QuickView>
        <ProductRelate></ProductRelate>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import QuickView from './components/QuickView.vue'
    import Breadcumb from './components/Breadcump.vue'
    import ProductDetail from './components/ProductDetail.vue'
    import ProductRelate from './components/ProductRelate.vue'
    export default {             
        components: {
            QuickView,
            Breadcumb,
            ProductDetail,
            ProductRelate,
        },                                   
    }
</script>