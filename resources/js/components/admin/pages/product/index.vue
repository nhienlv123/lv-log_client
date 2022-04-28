<template>
        <div class="container-fluid">
            <router-view></router-view>
        </div>   
</template>

<script>
    import ListProduct from './components/ListProduct.vue'
    import AddProduct from './components/AddProduct.vue'
    export default {
        components: { 
            AddProduct,
            ListProduct,         
        },

    }
</script>

<style>

</style>