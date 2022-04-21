<template>
    <!-- ****** Cart Area Start ****** -->
        <div class="cart_area section_padding_100 clearfix">
            <div class="container">
                <CartDetail></CartDetail>
                <OrderDetail></OrderDetail>                
            </div>
        </div>
        <!-- ****** Cart Area End ****** -->
</template>

<style lang="scss" scoped>
</style>

<script>
    import OrderDetail from './components/OrderDetail.vue'
    import CartDetail from './components/CartDetail.vue'
    export default {             
        components: {
            CartDetail,
            OrderDetail,
        },                                   
    }
</script>