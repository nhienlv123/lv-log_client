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
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
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
export default {

}
</script>

<style>

</style>