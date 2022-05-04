<template>
            <div class="row">
                <!-- Tabs -->
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a
                        class="nav-link active"
                        data-bs-toggle="tab"
                        href="#list"
                        role="tab"
                        ><span class="hidden-sm-up"></span>
                        <span class="hidden-xs-down"><h3>List</h3></span></a
                        >
                    </li>
                    <router-link :to="{name: 'admin.product.add'}">
                    <li class="nav-item">
                        <a class="nav-link" role="tab">
                            <span class="hidden-sm-up"></span>
                            <span class="hidden-xs-down">
                                <h3>Add</h3>
                            </span>
                        </a>
                    </li>       
                    </router-link>          
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">   
                        <div class="tab-pane active" id="list" role="tabpanel">
                            <!-- <div class="p-20"> -->
                            <div class="card-body">
                                <h4 class="card-title mb-0">List product: </h4>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="pro in getProducts" :key="pro.id">
                                        <th scope="row">{{pro.id}}</th>
                                        <td>{{pro.name}}</td>
                                        <td>{{pro.price}}</td>
                                        <td>{{pro.color}}</td>
                                        <td><img :src="pro.image" alt="" width="100px"></td>
                                        <td>
                                            <router-link :to="{name: 'admin.product.edit', params: {productId: pro.id}}">
                                                <button class="btn btn-warning button">Edit</button><br><br>
                                            </router-link>
                                            
                                            <button @click.prevent="deleteProduct(pro.id)" class="btn btn-danger button">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>                        
</template>

<script>
    import {mapGetters, mapActions} from 'vuex'
    export default {
        computed: {
            ...mapGetters('client',['getProducts'])
        },
        methods: {
            ...mapActions('client', ['getType', 'getProduct']),
            deleteProduct(id) {
                let uri = `http://127.0.0.1:8000/api/admin/deleteProduct/${id}`;
                this.axios.delete(uri).then(response => {
                    this.$router.go(0)
                    console.log(response.data);
                })
            }
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

<style scoped>
    .button {
        min-height:30px; 
        min-width: 90px;
    }
</style>