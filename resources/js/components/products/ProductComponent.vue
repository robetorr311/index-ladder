<template>
  <ValidationObserver v-slot="{ invalid }">
          <div class="card">
            <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trade Info</h5></div>
              <img :src="image_url" class="img-fluid mx-auto d-block">
              <div class="card-body">
                <h4 class="card-title">
                  <div class="row">
                    <div class="col">
                      <p class="text-left"> {{ name }}</p>
                    </div>
                    <div class="col">
                    <p class="text-right" v-if="amount">Currently valued in $ {{ amount }}</p>
                    </div>
                  </div>
                </h4>
                <p class="card-text">{{ category }} </p>
                <p class="card-text">{{ description }} </p>
                <h4 class="card-title">
                  <div class="row">
                    <div class="col">
                      <p class="text-left">To be Exchange By {{ exchname }}</p>
                    </div>
                    <div class="col">
                    <p class="text-right" v-if="exchamount">Currently valued in $ {{ exchamount }}</p>
                    </div>
                  </div>
                </h4>
                <img :src="exchimage_url" class="img-fluid mx-auto d-block">
                <p class="card-text">{{ exchcategory }} </p>
                <p class="card-text">{{ exchdescription }} </p>                
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col" v-if="show_like">
                    <p class="text-left" v-if="Getuser.logg>0">
                      <i class="far fa-heart cursor" v-if="Getlike.success==='Fail'" @click="likeItem"></i>
                      <i class="fas fa-heart" v-else></i>
                    </p>
                    <p class="text-left" v-else>
                      <i class="far fa-heart cursor" v-if="like" @click="likeItem"></i>
                      <i class="fas fa-heart" v-else></i>
                    </p>                    
                  </div>
                  <div class="col" v-if="accept_trade">
                    <p class="text-right">
                      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Accept the Trade </button>
                    </p>
                  </div>
                  <div class="col" v-else-if="finish_trd_s">
                    <p class="text-right">
                      <button type="button" data-toggle="modal" data-target="#myCancel" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Cancel This Trade</button>
                      <button type="button" data-toggle="modal" data-target="#myFinish" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Finish the Trade </button>
                    </p>
                  </div>                  
                  <div class="col" v-else-if="finish_trd_t">
                    <p class="text-right">
                      <button type="button" data-toggle="modal" data-target="#myCancel" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Cancel This Trade</button>
                      <button type="button" data-toggle="modal" data-target="#myFinish" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor"></i> Finish the Trade </button>
                    </p>
                  </div>
                  <div class="col" v-else>
                    <p class="text-right">
                      <button type="button" data-toggle="modal" data-target="#myConfirm" class="btn btn-secondary" v-if="finished"><i class="fas fa-shopping-cart cursor" ></i> Confirm Trade Finished</button>                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Accept the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="date" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <datepicker v-model="date" :format="customFormatter"></datepicker>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" @click="accept_tradde"><i class="fas fa-shopping-cart cursor" ></i>Accept</button>
                    </div>
                  </div>
                </div>
              </div>              
              <div class="modal" id="myFinish">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Finish the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="date" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            Please Choose the Qualify of Your Partner
                            <span v-if="qualify===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="qualify===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="qual(1)"></i><i class="far fa-star" @click="qual(2)"></i><i class="far fa-star" @click="qual(3)"></i><i class="far fa-star" @click="qual(4)"></i><i class="far fa-star" @click="qual(5)"></i><i class="far fa-star" @click="qual(6)"></i><i class="far fa-star" @click="qual(7)"></i><i class="far fa-star" @click="qual(8)"></i><i class="far fa-star" @click="qual(9)"></i><i class="far fa-star" @click="qual(10)"></i>
                            </span>                            
                            <input v-model="qualify" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>                        
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments" placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" @click="finish_trade"><i class="fas fa-shopping-cart cursor" ></i>Accept</button>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="modal" id="myConfirm">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Confirm Finished the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="date" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            Please Choose the Qualify of Your Partner
                            <span v-if="qualify===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="qualify===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="qual(1)"></i><i class="far fa-star" @click="qual(2)"></i><i class="far fa-star" @click="qual(3)"></i><i class="far fa-star" @click="qual(4)"></i><i class="far fa-star" @click="qual(5)"></i><i class="far fa-star" @click="qual(6)"></i><i class="far fa-star" @click="qual(7)"></i><i class="far fa-star" @click="qual(8)"></i><i class="far fa-star" @click="qual(9)"></i><i class="far fa-star" @click="qual(10)"></i>
                            </span>                            
                            <input v-model="qualify" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>                        
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments"  placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" @click="confirm_finish_trade"><i class="fas fa-shopping-cart cursor" ></i>Accept</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal" id="myCancel">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Cancel this Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="date" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            Please Choose the Qualify of Your Partner
                            <span v-if="qualify===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="qualify===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="qualify===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="qual(1)"></i><i class="far fa-star" @click="qual(2)"></i><i class="far fa-star" @click="qual(3)"></i><i class="far fa-star" @click="qual(4)"></i><i class="far fa-star" @click="qual(5)"></i><i class="far fa-star" @click="qual(6)"></i><i class="far fa-star" @click="qual(7)"></i><i class="far fa-star" @click="qual(8)"></i><i class="far fa-star" @click="qual(9)"></i><i class="far fa-star" @click="qual(10)"></i>
                            </span>                            
                            <input v-model="qualify" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>                        
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments"  placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" @click="cancel_trade"><i class="fas fa-shopping-cart cursor" ></i>Accept</button>
                    </div>
                  </div>
                </div>
              </div>                             
          </div>
            <div class="card">
            <div class="card-header"><div class="row"><div class="col"><p class="text-left"><h5 class="card-title"><i class="fas fa-user-tag"></i> About Tradder</h5></p></div><div class="col"><p class="text-right"><a :href="HomeUrl"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p></div></div></div>
            <div class="card-body">
                <p class="card-text">Name: {{ username }} </p>
                <p class="card-text">Email: {{ email }} </p>
                <p class="card-text">Phone: {{ phone }} </p>
            </div>
            </div>
            <messages-component :product-value="ProductValue"></messages-component>
          </div>
  </ValidationObserver>   
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
import Datepicker from 'vuejs-datepicker';
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
    Datepicker,
  },
  data() {
    return {
          product_id: '',
          category_id: '',
          name: '',
          description: '',
          type_id: '',
          amount: '',
          exchproduct_id: '',
          exchcategory_id: '',
          exchname: '',
          exchdescription: '',
          exchtype_id: '',
          exchamount: '',          
          tradde_number: '',
          sell_id: '',
          buy_id: '',
          status: '',
          image_url: '',
          exchimage_url:'',
          username: '',
          email: '',
          phone: '',
          category: '',
          exchcategory:'',
          values: '',
          HomeUrl: localStorage['URLroot'],
          logged: false,
          like: true,
          Getlike: '',
          GetExchange:'',
          exchange_id:'',
          show_accept: '',
          show_like: false,
          host_user_id:'',
          current_user_id:'',
          starting_at:'',
          date:'',
          success:'',
          Show_Button: '',
          finished:false,
          qualify:'0',
          tradde_id:'',
          comments:'',
          accept_trade: false,
          finish_trd_s: false,
          finish_trd_t: false,
      }
    },
    props: [
            'ProductValue',
          ],
    methods: {
        qual(value){
          this.qualify=value;
        },
        finish_trade(){
          axios.post( localStorage['URLroot'] + '/trade/finish',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              qualify: this.qualify,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },     
        confirm_finish_trade(){
          axios.post( localStorage['URLroot'] + '/trade/confirm',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              qualify: this.qualify,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },
        cancel_trade(){
          axios.post( localStorage['URLroot'] + '/trade/cancel',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              qualify: this.qualify,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },
        accept_tradde(){
          axios.post( localStorage['URLroot'] + '/trade/accept',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.product_id,
              starting_at: this.starting_at
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },
        likeItem(){
          axios.post( localStorage['URLroot'] + '/like',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.product_id
            }
          ).then(response => (this.ChkCode = response.data));
          axios.get( localStorage['URLroot'] + '/GetLike/' + this.ProductValue).then(response => (this.Getlike = response.data));
          this.like=false;
        },
        addtoCart(){
          alert(this.sell_id);
        },
        EditRegister(){
           this.disabled=false;
           this.showedit=false;
           this.showsave=true; 
        },
        GetExchangeValues(response){
            this.exchproduct_id=response.id;
            this.exchcategory_id=response.category_id;
            this.exchname=response.name;
            this.exchdescription=response.description;
            this.exchtype_id=response.type_id;
            this.exchamount=response.amount;
            this.exchimage_url=response.image_url;
            this.exchcategory=response.category;
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser(response.data)));
        },
        GetValues(response){
            this.product_id=response.product_id;
            this.category_id=response.category_id;
            this.name=response.name;
            this.description=response.description;
            this.type_id=response.type_id;
            this.amount=response.amount;
            this.tradde_number=response.tradde_number;
            this.sell_id=response.host_user_id;
            this.buy_id=response.target_user_id;
            this.tradde_id=response.tradde_id;
            this.status=response.status;
            this.image_url=response.image_url;
            this.username=response.username;
            this.email=response.email;
            this.phone=response.phone;
            this.category=response.category;
            this.host_user_id=response.host_user_id;
            axios.get( localStorage['URLroot'] + '/getexchproduct/' + response.exchange_id).then(response => (this.GetExchangeValues(response.data)));
        },
        SetConfirmed(response){
          let resp=JSON.stringify(response).length;
          if(resp<3){
            if(this.status=='4'){
              this.finished=true;
            }
            if(this.status=='3'){
              this.finished=true;
            }            
          }
        },
        Getuser(response){
            this.current_user_id=response.id;
            //alert(this.current_user_id+ '-' + this.host_user_id + '-' + this.status);
            if(this.host_user_id==this.current_user_id){
              this.show_like= false;
              switch (this.status) {
                case '2':
                  this.finish_trd_t=true;
                  this.finish_trd_s=false;
                  this.accept_trade=false;                  
                  break;
                case '3':
                  axios.get( localStorage['URLroot'] + '/GetConfirmed/' + this.tradde_id).then(response => (this.SetConfirmed(response.data)));
                  break;
                case '4':
                  axios.get( localStorage['URLroot'] + '/GetConfirmed/' + this.tradde_id).then(response => (this.SetConfirmed(response.data)));
                  break; 
                default:
                  break;                  
              }
              if(this.status==2) {
                this.finish_trd_t=true;
                this.finish_trd_s=false;
                this.accept_trade=false;                 
              }                           
            }
            else{
              this.show_like= true;              
              switch (this.status) {
                case '1':
                  this.accept_trade=true;
                  this.finish_trd_s=false;
                  this.finish_trd_t=false;
                  break;
                case '2':
                  this.finish_trd_s=true;
                  this.finish_trd_t=false;
                  this.accept_trade=false;
                  break;
                case '3':
                  axios.get( localStorage['URLroot'] + '/GetConfirmed/' + this.tradde_id).then(response => (this.SetConfirmed(response.data)));
                  break;
                case '4':
                  axios.get( localStorage['URLroot'] + '/GetConfirmed/' + this.tradde_id).then(response => (this.SetConfirmed(response.data)));
                  break; 
                default:
                  break;
                }
            }             
        },
        customFormatter(date) {
         let mnt=date.getMonth() + 1;
         let yr=date.getFullYear();
         let dy=date.getDate();
         let hr=date.getHours();
         let mn=date.getMinutes();
         let sc=date.getSeconds();
         let ms=date.getMilliseconds();
         let output= yr + '-' + mnt + '-' + dy;
         this.starting_at=yr + '-' + mnt + '-' + dy;
         return output;
        },
        setButtons(){
         
        } 
    },
    mounted() {
            axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));      
            axios.get( localStorage['URLroot'] + '/GetLike/'+ this.ProductValue).then(response => (this.Getlike = response.data));
            axios.post( localStorage['URLroot'] + '/notifications/SetView',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.ProductValue
            }
          ).then(response => (console.log(response.data)));
          this.setButtons();  
    }     
}
</script>