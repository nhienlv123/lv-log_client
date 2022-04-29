<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import {mapActions} from 'vuex'
    export default {  
        methods: {
            ...mapActions('client', ['getType', 'getProduct']),
        },
        created() {
            // Lấy toàn bộ data của types và products
            let uri = 'http://127.0.0.1:8000/api/client/getClient';
            this.axios.get(uri).then(response => {
                // console.log(response.data);
                this.getType(response.data.types); 
                this.getProduct(response.data.products);
            });   
        },      
    }    
</script>