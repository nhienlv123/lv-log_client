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
                        <form class="form-horizontal" @submit.prevent="addProduct">
                            <div class="card-body">
                                <h4 class="card-title">Add a new product: </h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name:</label>
                                    <div class="col-sm-9">
                                        <input v-model="value.name" type="text" class="form-control" id="fname" placeholder="Ex: Endless Love" />
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Type:</label>
                                    <div class="col-sm-9">
                                    <multiselect v-model="value.type" :options="getTypes" :multiple="true" :close-on-select="true" :clear-on-select="false" :preserve-search="true" placeholder="Pick some" label="type_name" track-by="type_name" :preselect-first="false">
                                        <!-- <template slot="selection" slot-scope="{ values, isOpen }"><span class="multiselect__single" v-if="values.length &amp;&amp; !isOpen">{{ values.length }} options selected</span></template> -->
                                    </multiselect>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Color:</label>
                                    <div class="col-md-9">
                                    <select v-model="value.color" 
                                        class="select2 form-select shadow-none"
                                        style="width: 100%; height: 36px"
                                    >   
                                        <option style="color:black">Pick one</option>
                                        <option value="red">Red</option>
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="other">Other...</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label" >Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input v-model="value.price" type="number" class="form-control" placeholder="Ex: 123" aria-label="Recipient 's username" aria-describedby="basic-addon2" />
                                            <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"
                                                >$</span
                                            >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Size:</label>
                                    <div class="col-sm-9">
                                        <input v-model="value.size" type="number" class="form-control" placeholder="Ex: 123" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Quantity:</label>
                                    <div class="col-sm-9">
                                        <input v-model="value.quantity" type="number" class="form-control" placeholder="Ex: 123" />
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Url Image:</label>
                                    <div class="col-sm-9">
                                        <textarea  v-model="value.image" class="form-control" placeholder="Ex: /url_image"></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label" >Description</label>
                                    <div class="col-sm-9">
                                        <textarea  v-model="value.description" class="form-control" placeholder="Ex: Description...."></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button class="btn btn-primary">Submit</button>
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
                value: {},
            }
        },
        methods: {
            addProduct() {
                const uri = 'http://127.0.0.1:8000/api/admin/addProduct';
                this.axios.post(uri, this.value).then((reponse) => {
                    console.log(reponse.data.message);
                    console.log(this.value);
                    this.$router.push({name: 'admin.product.list'})
                })
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
    
</style>