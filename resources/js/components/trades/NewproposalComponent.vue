<template>
  <ValidationObserver v-slot="{ invalid }">	
    <div class="col">
    <p class="text-right">
      <button type="button" data-toggle="modal" data-target="#ProposeExchange" class="btn btn-secondary" @click="startInterval"><i class="fas fa-shopping-cart cursor" ></i> Propose Exchange </button>
    </p>
    <div class="modal" id="ProposeExchange">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Propose an Exchange</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill mt-5" @click="SaveItem" data-dismiss="modal" :disabled="invalid">Save Item</button>
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
    ExcimageComponent,    
  },        
  data() {
    return {
          exchange:false,
          exchangeitemname:'',
          exchangeamount: '',
          exchangedescription: '',
          exchangecategory: '',
          exchangetype:'',
          GetECategories:'',
          GetESubCategories:'',
          show_e_amount: false,
          ExchCategoryData:'',
          upload2:'',
          exchproduct_id: '',
          exchcategory_id: '',
          exchname: '',
          exchdescription: '',
          exchtype_id: '',
          exchamount: '',
          tradde_number: '',
    };
  },
  props: [
    'ProductValue',
  ],
  methods: {
    SetExchDecimal(){
      let am = this.exchangeamount;
      let index=am.indexOf(".");
      if(index<0){
        am=am + '.00';
      }
      this.exchangeamount=am;
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
    getExchType(response){
      console.log(response);
      axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.SetExchType(response.data)));
    },
    Exchchoose(){
      axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.exchangecategory).then(response => (this.getExchType(response.data)));
    },
    onInputExcChange(){
      if(this.exchangeitemname.length>2) {
        axios.get( localStorage['URLroot'] + '/categories/search/' + this.exchangeitemname).then(response => (this.ExchCategoryData = response.data));
      }
    },
    SaveItem(){
      axios.post( localStorage['URLroot'] + '/trade/propose' ,
      {
        csrfToken: myToken.csrfToken,
        exchangetype: this.exchangetype,          
        exchangeitemname:this.exchangeitemname,
        exchangeamount: this.exchangeamount,
        exchangedescription: this.exchangedescription,
        exchangecategory: this.exchangecategory,
        tradde_id: this.tradde_id          
      }
      ).then(response => (this.IsSaved = response.data));
        this.showSuccess();
    },
    showSuccess(){
        window.scrollTo(0,0);
        this.success=true;
        setTimeout(() => {
          location.reload();
        },6000);        
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
        axios.get(localStorage['URLroot'] + '/IsUploaded/' + 2).then(response => (this.IsEUploaded(response.data)));
      }, 2000)
    },
    GetValues(response){
      this.tradde_id=response.tradde_id;           
    },    
  },
  mounted() {
    axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));
  },        
}
</script>