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
                        href="#add"
                        role="tab"
                        ><span class="hidden-sm-up"></span>
                        <span class="hidden-xs-down"><h3>Add</h3></span></a
                        >
                    </li>
                    <router-link :to="{name: 'admin.product.list'}">
                    <li class="nav-item">                        
                        <a class="nav-link" role="tab">
                            <span class="hidden-sm-up"></span>                            
                            <span class="hidden-xs-down">
                                <h3>List</h3>
                            </span>                            
                        </a>                       
                    </li> 
                    </router-link>                
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">   
                    <div class="tab-pane active" id="add" role="tabpanel">
                        <!-- <div class="p-20"> -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <h4 class="card-title">Add a new product: </h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name Here" />
                                    </div>
                                </div>  
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Color</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
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