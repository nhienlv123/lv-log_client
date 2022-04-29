<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="signUp">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <input type="text" class="col-sm-9 form-control" id="name" v-model="user.name">
                    </div>   
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
    export default {
        data() {
            return {
                user: {}
            }            
        },
        methods: {
            signUp() {
                let uri =`http://127.0.0.1:8000/api/register`;
                this.axios.post(uri, this.user).then((response) =>{
                    this.$router.push({name: 'login'});
                });
            }
        }
    }
</script>