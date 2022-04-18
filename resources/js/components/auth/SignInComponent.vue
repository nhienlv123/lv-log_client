<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="signin(user)">
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <input type="email" class="col-sm-9 form-control" id="email" v-model="user.email">
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <input type="password" class="col-sm-9 form-control" id="password" v-model="user.password">
                    </div>                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapMutations, mapActions,mapState} from 'vuex'
    export default {
        data() {
            return {
                user:{}
            }
        },
        methods: {
            signin() {
                console.log(this.user)
            }
        }
        // computed: {
        //     ...mapState({
        //         a: state => state.auth.isLoged
        //     }),
        // },
        
        // methods: {
        //     ...mapActions({
        //         signin: 'auth/signin'})
            // signin(user) {
            //     this.$store.dispatch('auth/signIn', user)
            // }


            // signIn() {
            //     let uri = `http://127.0.0.1:8000/api/signin`;
            //     this.axios.post(uri, this.user).then(
            //         (response) => {
            //             if (response.data.email == this.user.email) {
            //                 this.$router.push({name: 'client.dashboard'}) 
            //                 this.isLoged = !this.isLoged
            //             }
            //             else alert('Sign in fail. Try again!!!');
            //         }
            //     )                 
            // }
        //}
    }
</script>

<style lang="scss" scoped>
</style>