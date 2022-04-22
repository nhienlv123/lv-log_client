<template>
    <!-- ****** Checkout Area Start ****** -->
        <div class="checkout_area section_padding_100">
            <div class="container">
                <div class="row">
                    <CheckoutDetail v-bind="{userInfo}"></CheckoutDetail>
                    <OrderDetail></OrderDetail>
                </div>
            </div>
        </div>
        <!-- ****** Checkout Area End ****** -->
</template>

<style lang="scss" scoped>
</style>

<script>
    import {mapGetters} from 'vuex'
    import CheckoutDetail from './components/CheckoutDetail.vue'
    import OrderDetail from './components/OrderDetail.vue'
    export default {             
        components: {
            CheckoutDetail,
            OrderDetail,
        },     
        // props: {
        //     userInfo: {type: Object}
        // },
        computed: {
            ...mapGetters('auth', ['userInfo'])
        },                              
    }
</script>