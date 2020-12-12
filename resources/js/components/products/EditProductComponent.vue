<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="alert alert-success" v-if="success">
      <strong>Success!</strong> The item has been updated
    </div>
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
                      <ValidationProvider name="amount" rules="required|double" v-slot="{ errors }">
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
                    <upload-component :product-value="productValue"></upload-component>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-center">
                  <button type="button" class="btn btn-secondary rounded-pill mt-5" @click="SaveItem" :disabled="invalid">Save Item</button>
                </div>
              </div>
          </div>
  </ValidationObserver>   
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, double, required, email } from 'vee-validate/dist/rules';
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
        ItemId: this.productValue,
        itemname: '',
        amount: '',
        description: '',
        category: '',
        subcategory: '',
        type: '',
        product_images:[],
        GetTypes:'',
        GetItem: '',
        GetCategories:'',
        GetParentSubc:'',
        GetSubCategories:'',
        product: '',
        file: '',
        success: '',
        none: 1,
        IsSaved:'',
        success: false,
      }
    },
    props: [
      'productValue'
    ],
    methods: {
      SaveItem(){
        axios.post( localStorage['URLroot'] + '/product/update' ,
        {
          csrfToken: myToken.csrfToken,
          id: this.productValue,
          name: this.itemname,
          amount: this.amount,
          description: this.description,
          type_id: this.type,
          category_id: this.subcategory
        }
        ).then(response => (this.IsSaved = response.data));
        this.showSuccess();
      },
      showSuccess(){
          this.success=true;
          setTimeout(() => {
            location.reload();
          },6000);        
      },
      setValues(data){
        this.itemname=data.name;
        this.amount=data.amount;
        this.description=data.description;
        this.type=data.type_id;
        this.GetCat();
        this.GetThisSubCat(data.category_id);
        this.subcategory=data.category_id;
      },
      GetCat(){
        var parent='';
        if(this.type==1){
          parent=1329;
        }
        else if (this.type==2){
          parent=1330;
        }
        else{
          parent=1331;
        }
        axios.get( localStorage['URLroot'] + '/categories/getchilds/' + parent).then(response => (this.GetCategories = response.data));
      },
      GetThisSubCat(categoryid){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + categoryid).then(response => (this.getParentSubCat(response.data)));
      }, 
      getParentSubCat(data){
        this.category=data.id;
        this.GetSubCat();
      }, 
      GetSubCat(){
        axios.get( localStorage['URLroot'] + '/categories/getchilds/' + this.category).then(response => (this.GetSubCategories = response.data));
      },
    },
    mounted() {
      this.ItemId=this.productValue;
      axios.get( localStorage['URLroot'] + '/GetItem/' + this.productValue).then(response => (this.GetItem=response.data));
      axios.get( localStorage['URLroot'] + '/GetItem/' + this.productValue).then(response => (this.setValues(response.data)));
      axios.get( localStorage['URLroot'] + '/GetTypes').then(response => (this.GetTypes = response.data));
    }     
}
</script>