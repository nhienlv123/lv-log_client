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
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input v-model="value.name" type="text" class="form-control" id="fname" placeholder="First Name Here" />
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Type:</label>
                                    <div class="col-sm-9">
                                    <multiselect v-model="value.type" :options="getTypes" :multiple="true" :close-on-select="true" :clear-on-select="false" :preserve-search="true" placeholder="Pick some" label="type_name" track-by="type_name" :preselect-first="true">
                                        <!-- <template slot="selection" slot-scope="{ values, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template> -->
                                    </multiselect>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Color:</label>
                                    <div class="col-md-9">
                                    <select
                                        class="select2 form-select shadow-none"
                                        style="width: 100%; height: 36px"
                                    >
                                        <option>Select</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                        </optgroup>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2" />
                                            <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"
                                                >$</span
                                            >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Quantity:</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="fname" placeholder="First Name Here" />
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
                                    <button type="button" class="btn btn-primary" @click="log">Submit</button>
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
    import Multiselect from 'vue-multiselect'
    import {mapGetters} from 'vuex'
    export default {
        components: {
            Multiselect
        },
        computed: {
            ...mapGetters('client',['getTypes'])
        },
        data () {            
            return {
                value: [],
            }
        },
        methods: {
            log() {
                console.log(this.value)
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
    
</style>