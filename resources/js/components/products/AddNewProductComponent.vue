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
                        <ValidationProvider name="subcategory" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input v-model="subcategory" type="text" class="form-control" name="subcategory" placeholder="Category" disabled>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>                    
                    <div class="row justify-content-center" v-if="CategoryData.length">
                      <div class="col">
                        <span class="card-text">Choose One Category</span>
                        <div class="over">
                        <table>
                          <tbody>
                            <tr v-for="category in CategoryData">
                              <td><span class="category-choices cursor" @click="choose(category.id,category.name)">{{ category.name }}</span></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                      </div>
                    </div>                    
                    <div class="row justify-content-center">
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
                    <div class="row justify-content-center" v-if="show_amount===false">
                      <div class="col">
                        <upload-component></upload-component>
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
      getType(response){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.type = response.data.id));
      },
      choose(id,name) {
        this.category=id;
        this.subcategory=name;
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.category).then(response => (this.getType(response.data)));
        this.CategoryData='';
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
          category: this.category
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
      GetCat(){
          var parent='';
          if(this.offer==1){
            parent=1329;
            axios.get( localStorage['URLroot'] + '/categories/getchilds/' + parent).then(response => (this.GetCategories = response.data));
            this.show_amount=false;
          }
          else if (this.offer==2){
            parent=1330;
            axios.get( localStorage['URLroot'] + '/categories/getchilds/' + parent).then(response => (this.GetCategories = response.data));
            this.show_amount=false;
          }
          else if (this.offer==3){
            parent=1331;
            axios.get( localStorage['URLroot'] + '/categories/getchilds/' + parent).then(response => (this.GetCategories = response.data));
            this.show_amount=false;
          }
          else{
            this.show_amount=true;
          }
      },  
      GetSubCat(type){
        if(type==1){
          axios.get( localStorage['URLroot'] + '/categories/getchilds/' + this.category).then(response => (this.GetSubCategories = response.data));
        }
        else {
          axios.get( localStorage['URLroot'] + '/categories/getchilds/' + this.category).then(response => (this.GetESubCategories = response.data));
        }
      },         
    },
    mounted() {
      axios.get( localStorage['URLroot'] + '/GetTypes').then(response => (this.GetTypes = response.data));
      axios.get( localStorage['URLroot'] + '/trades/GetOffer').then(response => (this.GetOffer = response.data));
      axios.get( localStorage['URLroot'] + '/trades/GetTime').then(response => (this.GetTime = response.data));
    }     
}
</script>