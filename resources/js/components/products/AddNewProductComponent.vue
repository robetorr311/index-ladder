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
                <div class="card">
                  <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> To be Exchange By</h5></div>
                  <div class="card-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="exchangeitemname" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input v-model="exchangeitemname" type="text" class="form-control" name="exchangeitemname" @keydown="onInputExcChange" placeholder="Name">
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="exchangecategory" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <select v-model="exchangecategory" class="form-control" name="exchangecategory" @change="Exchchoose()">
                          <option value="" >Choose One Category</option>
                          <option v-for="option in ExchCategoryData" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                            </select>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>                    
                    <div class="row justify-content-center" v-if="show_e_amount">
                    <div class="col">
                      <ValidationProvider name="exchangeamount" rules="double" v-slot="{ errors }">
                        <div class="input-group" >
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                          </div>
                          <input v-model="exchangeamount" type="text" class="form-control" name="exchangeamount" @change="SetExchDecimal()" placeholder="Amount">
                          <span class="has-error">{{ errors[0] }}</span>
                        </div>
                      </ValidationProvider>
                    </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                          <ValidationProvider name="exchangedescription" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tags"></i></span>
                            </div>
                            <textarea v-model="exchangedescription" type="text" class="form-control" name="exchangedescription" placeholder="Description"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                          </ValidationProvider>
                        </div>
                    </div>  
                    <div class="row justify-content-center">
                      <div class="col">
                        <excimage-component :type-value="2" :edit-value="0"></excimage-component>
                        <ValidationProvider name="upload2" rules="required" v-slot="{ errors }">
                          <input v-model="upload2" type="hidden" class="form-control" name="upload2">
                          <span class="has-error">{{ errors[0] }}</span>
                        </ValidationProvider>                         
                      </div>
                    </div>
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
import ExcimageComponent from "../ExcimageComponent.vue";
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
    ExcimageComponent,
  },
  data() {
    return {
        itemname:'',
        amount: '',
        description: '',
        category: '',
        exchangeitemname:'',
        exchangeamount: '',
        exchangedescription: '',
        exchangecategory: '',        
        subcategory: '',
        type: '',
        exchangetype:'',
        offer: '',
        time:'',
        product_images:[],
        GetOffer:'',
        GetTime:'',
        GetTypes:'',
        GetCategories:'',
        GetSubCategories:'',
        GetECategories:'',
        GetESubCategories:'',        
        product: '',
        file: '',
        success: '',
        none: 1,
        IsSaved:'',
        success: false,
        show_amount: false,
        show_e_amount: false,
        CategoryData:'',
        ExchCategoryData:'',
        upload1:'',
        upload2:'', 
      }
    },
    props: [],
    methods: {
      SetDecimal(){
        let am = this.amount;
        let index=am.indexOf(".");
        if(index<0){
          am=am + '.00';
        }
        this.amount=am;
      },
      SetExchDecimal(){
        let am = this.exchangeamount;
        let index=am.indexOf(".");
        if(index<0){
          am=am + '.00';
        }
        this.exchangeamount=am;
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
      SetExchType(response){
        this.exchangetype = response.id;
        if(response.id=='1331'){
          this.show_e_amount=true;
        }
        else{
          this.show_e_amount=false;
        }
      },      
      getType(response){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.SetType(response.data)));
      },
      getExchType(response){
        console.log(response);
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.SetExchType(response.data)));
      },
      choose() {
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.category).then(response => (this.getType(response.data)));
      },
      Exchchoose(){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.exchangecategory).then(response => (this.getExchType(response.data)));
      },
      onInputExcChange(){
        if(this.exchangeitemname.length>2) {
          axios.get( localStorage['URLroot'] + '/categories/search/' + this.exchangeitemname).then(response => (this.ExchCategoryData = response.data));
        }
      },      
      onInputChange() {
        if(this.itemname.length>2) {
          axios.get( localStorage['URLroot'] + '/categories/search/' + this.itemname).then(response => (this.CategoryData = response.data));
        }
      },
      SaveItem(){
        axios.post( localStorage['URLroot'] + '/product/store' ,
        {
          csrfToken: myToken.csrfToken,
          itemname:this.itemname,
          amount: this.amount,
          type: this.type,
          description: this.description,
          category: this.category,
          exchangetype: this.exchangetype,          
          exchangeitemname:this.exchangeitemname,
          exchangeamount: this.exchangeamount,
          exchangedescription: this.exchangedescription,
          exchangecategory: this.exchangecategory          
        }
        ).then(response => (this.IsSaved = response.data));

        this.showSuccess();
      },
      showSuccess(){
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
      IsEUploaded(response){
        if(response.count>0){
          this.upload2=response.count;
        }
        else{
          this.upload2='';
        }
      },
      startInterval() {
        setInterval(() => {
          axios.get(localStorage['URLroot'] + '/IsUploaded/' + 1).then(response => (this.IsUploaded(response.data)));
          axios.get(localStorage['URLroot'] + '/IsUploaded/' + 2).then(response => (this.IsEUploaded(response.data)));
        }, 2000)
      },
    },
    mounted() {
      this.startInterval()
    }     
}
</script>