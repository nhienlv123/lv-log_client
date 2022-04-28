<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="signIn(user)">
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
            ...mapActions('auth',['signin',]),        
            signIn() {
                let uri = `http://127.0.0.1:8000/api/login`;
                this.axios.post(uri, this.user).then(
                    (response) => {
                        if (response.data.user.email == this.user.email && response.data.user.role == 1) {
                            this.$router.push({name: 'client.home'})
                            this.signin(response.data.user)
                            console.log(response.data.data);
                        }
                        else if (response.data.user.email == this.user.email && response.data.user.role == 2) {
                            this.$router.push({name: 'admin.dashboard'})
                            this.signin(response.data.user)
                        }
                        else alert(response.data);
                    }
                )                 
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>