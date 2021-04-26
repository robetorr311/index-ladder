<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="alert alert-success" v-if="success">
      <strong>Success!</strong> The item has been added
    </div>
          <div class="card">
            <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Publish a Trade</h5></div>
              <div class="card-body">
                <div class="card">
                  <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> You Offer</h5></div>
                  <div class="card-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="itemname" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input v-model="itemname" type="text" class="form-control" name="itemname" @keydown="onInputChange" placeholder="Name">
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
                            <select v-model="category" class="form-control" name="category" @change="choose()">
                          <option value="" >Choose One Category</option>
                          <option v-for="option in CategoryData" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                            </select>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>                    
                    <div class="row justify-content-center" v-if="show_amount">
                    <div class="col">
                      <ValidationProvider name="amount" rules="double" v-slot="{ errors }">
                        <div class="input-group" >
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                          </div>
                          <input v-model="amount" type="text" class="form-control" name="amount" @change="SetDecimal()" placeholder="Amount">
                          <span class="has-error">{{ errors[0] }}</span>
                        </div>
                      </ValidationProvider>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                          <ValidationProvider name="description" rules="required|max:249" v-slot="{ errors }">
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
                        <upload-component :type-value="1" :edit-value="0"></upload-component>
                        <ValidationProvider name="upload1" rules="required" v-slot="{ errors }">
                          <input v-model="upload1" type="hidden" class="form-control" name="upload1">
                          <span class="has-error">{{ errors[0] }}</span>
                        </ValidationProvider>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">   
                <div class="text-center">
                  <button type="button" class="btn btn-secondary" @click="SaveItem" :disabled="invalid">Save Item</button>
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
    UploadComponent
  },
  data() {
    return {
        itemname:'',
        amount: '',
        description: '',
        category: '',
        subcategory: '',
        type: '',
        offer: '',
        time:'',
        product_images:[],
        GetOffer:'',
        GetTime:'',
        GetTypes:'',
        GetCategories:'',
        GetSubCategories:'',
        product: '',
        file: '',
        success: '',
        none: 1,
        IsSaved:'',
        success: false,
        show_amount: false,
        CategoryData:'',
        upload1:'',
        upload2:'',
        tradde_id:'', 
      }
    },
    props: [
      'productValue'
    ],
    methods: {
      SetDecimal(){
        let am = this.amount;
        let index=am.indexOf(".");
        if(index<0){
          am=am + '.00';
        }
        this.amount=am;
      },
      SetType(response){
        this.type = response.id;
        if(response.id=='1331'){
          this.show_amount=true;
        }
        else{
          this.show_amount=false;
        }
      },
      getType(response){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.SetType(response.data)));
      },
      choose() {
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.category).then(response => (this.getType(response.data)));
      },
      onInputChange() {
        if(this.itemname.length>2) {
          axios.get( localStorage['URLroot'] + '/categories/search/' + this.itemname).then(response => (this.CategoryData = response.data));
        }
      },
      SaveItem(){
        axios.post( localStorage['URLroot'] + '/product/update' ,
        {
          csrfToken: myToken.csrfToken,
          product_id: this.productValue,
          itemname:this.itemname,
          amount: this.amount,
          type: this.type,
          description: this.description,
          category: this.category,
          tradde_id: this.tradde_id
        }
        ).then(response => (this.IsSaved = response.data));
        this.showSuccess();
      },
      showSuccess(){
          window.scrollTo(0,0);
          this.success=true;
          setTimeout(() => {
            location.href = localStorage['URLroot'] + '/dashboard';
          },6000);        
      },
      IsUploaded(response){
        if(response.count>0){
          this.upload1=response.count;
        }
        else{
          this.upload1='';
        }
      },
      setValues(data){
        this.itemname=data.name;
        this.amount=data.amount;
        this.description=data.description;
        this.type=data.type_id;
        this.category=data.category_id;
        this.tradde_id=data.tradde_id;
        axios.get( localStorage['URLroot'] + '/categories/search/' + this.itemname).then(response => (this.CategoryData = response.data));
      },      
      startInterval() {
        setInterval(() => {
          axios.get(localStorage['URLroot'] + '/IsUploaded/' + 1).then(response => (this.IsUploaded(response.data)));
        }, 2000)
      },
    },
    mounted() {
      axios.get( localStorage['URLroot'] + '/GetItem/' + this.productValue).then(response => (this.setValues(response.data)));
      axios.get( localStorage['URLroot'] + '/GetTypes').then(response => (this.GetTypes = response.data));
      this.startInterval();
    }     
}
</script>