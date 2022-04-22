<template>
    <div>
        <QuickView></QuickView>
        <section class="shop_grid_area section_padding_100">
            <div class="container">
                <div class="row">
                    <SideBar></SideBar>
                    <ShopGrid></ShopGrid>                    
                </div>
            </div>
        </section>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import QuickView from './components/QuickView.vue'
    import ShopGrid from './components/ShopGrid.vue'
    import SideBar from './components/SideBar.vue'
    export default {             
        components: {
            QuickView,
            ShopGrid,
            SideBar,
        },                                   
    }
</script>