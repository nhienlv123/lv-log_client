<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <router-view></router-view>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import HeaderComponent from './components/HeaderComponent.vue'
    import {mapMutations, mapActions, mapState, mapGetters} from 'vuex'
    export default {     
        components: {
            HeaderComponent,
        },   
        computed: {            
            ...mapGetters('auth', ['userInfo'])
        },
        methods: {
            ...mapActions('auth', ['login',])
        },
        created() {
            // Lấy toàn bộ data của types và products
            let uri = 'http://127.0.0.1:8000/api';
            this.axios.get(uri).then(response => {
                // console.log(response.data);
                if (response.data.isLoged && response.data.user.role == 1) {
                    this.$router.push({name: 'client.home'});
                    this.login(response.data.user);
                }
                else if (response.data.isLoged && response.data.user.role == 2) {
                    this.$router.push({name: 'admin.home'});
                    this.login(response.data.user);
                }
                else {
                    this.$router.push({name: 'login'});
                }
            });            
        },               
    }
</script>