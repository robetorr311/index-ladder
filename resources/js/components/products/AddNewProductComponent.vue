<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container"> 
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">Add New Item</div>
              <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col">
                      <ValidationProvider name="itemname" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                        <input v-model="itemname" type="text" class="form-control" name="itemname" placeholder="Name">
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div>  
                <div class="row justify-content-center">
                  <div class="col">
                      <ValidationProvider name="amount" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                    </div>
                        <input v-model="amount" type="text" class="form-control" name="amount" placeholder="Amount">
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div> 
                <div class="row justify-content-center">
                    <div class="col">
                      <ValidationProvider name="description" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tags"></i></span>
                    </div>
                        <textarea v-model="description" type="text" class="form-control" name="description" placeholder="Description"></textarea>
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div>  
                <div class="row justify-content-center">
                    <div class="col">
                      <ValidationProvider name="type" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                        <select v-model="type" class="form-control" name="type" @change="GetCat">
                          <option value="" >Choose Type Item</option>
                          <option v-for="option in GetTypes" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                        </select>
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div>  
                <div class="row justify-content-center">
                  <div class="col">
                      <ValidationProvider name="category" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                        <select v-model="category" class="form-control" name="category" @change="GetSubCat">
                          <option value="" >Choose Category Item</option>
                          <option v-for="option in GetCategories" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                        </select>
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div>  
                <div class="row justify-content-center">
                  <div class="col">
                      <ValidationProvider name="subcategory" rules="required" v-slot="{ errors }">
                      <div class="input-group" >
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                        <select v-model="subcategory" class="form-control" name="subcategory">
                          <option value="" >Choose Sub Category Item</option>
                          <option v-for="option in GetSubCategories" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                        </select>
                        <span class="has-error">{{ errors[0] }}</span>
                      </div>
                      </ValidationProvider>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                    <upload-component></upload-component>
                  </div>
                </div>
              </div>
              <div class="card-footer">
              </div>
          </div>
        </div>
      </div>

     
    </div>
  </ValidationObserver>   
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
import UploadComponent from "../UploadComponent.vue";
Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule]);
});

// with typescript
for (let [rule, validation] of Object.entries(rules)) {
  extend(rule, {
    ...validation
  });
}
// No message specified.
extend('email', email);

// Override the default message.
extend('confirmed', {
  ...confirmed,
  message: 'The value does not match'
});
extend('required', {
  ...required,
  message: 'This field is required'
});
export default {
  components: {
    ValidationObserver,
    ValidationProvider,
    UploadComponent,
  },
  data() {
    return {
        itemname:'',
        amount: '',
        description: '',
        category: '',
        subcategory: '',
        type: '',
        product_images:[],
        GetTypes:'',
        GetCategories:'',
        GetSubCategories:'',
        product: '',
        file: '',
        success: '',
        none: 1        
      }
    },
    props: [],
    methods: {
      GetCat(){
        console.log(this.type);
        var parent='';
        if(this.type==1){
          parent=1329;
        }
        else if (this.type==2){
          parent=257;
        }
        else{
          parent=1331;
        }
        axios.get( localStorage['URLroot'] + '/categories/getchilds/' + parent).then(response => (this.GetCategories = response.data));
      },  
      GetSubCat(){
        console.log(this.category);
        axios.get( localStorage['URLroot'] + '/categories/getchilds/' + this.category).then(response => (this.GetSubCategories = response.data));
      },         
    },
    mounted() {
      axios.get( localStorage['URLroot'] + '/GetTypes').then(response => (this.GetTypes = response.data));
            console.log('AddNewProductComponent Mounted')
    }     
}
</script>