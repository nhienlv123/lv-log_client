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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="pro in getProducts" :key="pro.id">
                                        <th scope="row">{{pro.id}}</th>
                                        <td>{{pro.name}}</td>
                                        <td>{{pro.price}}</td>
                                        <td>{{pro.color}}</td>
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
    import {mapGetters} from 'vuex'
    export default {
        computed: {
            ...mapGetters('client',['getProducts'])
        }
    }
</script>

<style>

</style>