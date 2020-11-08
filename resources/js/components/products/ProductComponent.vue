<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container"> 
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">About Item</div>
              <img :src="image_url" class="img-fluid mx-auto d-block">
              <div class="card-body">
                <h4 class="card-title">
                  <div class="row">
                    <div class="col">
                      <p class="text-left">{{ name }}</p>
                    </div>
                    <div class="col">
                    <p class="text-right">$ {{ amount }}</p>
                    </div>
                  </div>
                </h4>
                <p class="card-text">{{ category }} </p>
                <p class="card-text">{{ description }} </p>             
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col">
                    <p class="text-left">
                      <i class="far fa-heart cursor" v-if="like" @click="likeItem"></i>
                      <i class="fas fa-heart" v-else></i>
                    </p>
                  </div>
                  <div class="col">
                    <p class="text-right">
                      <i class="fas fa-shopping-cart cursor" v-if="logged" @click="addtoCart"></i>
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card">
            <div class="card-header"><div class="row"><div class="col"><p class="text-left">About Seller</p></div><div class="col"><p class="text-right"><a :href="HomeUrl"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></p></div></div></div>
            <div class="card-body">
                <p class="card-text">Name: {{ firstname }}, {{ lastname }} </p>
                <p class="card-text">Email: {{ email }} </p>
                <p class="card-text">Phone: {{ phone }} </p>
            </div>
            </div>
          </div>
      </div>
      <div class="row justify-content-center" v-if="logged">
          <div class="col-md-10">
            <div class="card">
            <div class="card-header">Messages / Questions about Item </div>
            <div class="card-body">
                <p class="card-text">input text area here...</p>
                <p class="card-text">list of messages here...</p>
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
  },
  data() {
    return {
          category_id: '',
          name: '',
          description: '',
          type_id: '',
          amount: '',
          tradde_number: '',
          sell_id: '',
          buy_id: '',
          status: '',
          image_url: '',
          firstname: '',
          lastname: '',
          email: '',
          phone: '',
          category: '',
          values: '',
          HomeUrl: localStorage['URLroot'],
          logged: false,
          like: true,
          mymessages: ''
      }
    },
    props: [
            'ProductValue',
            'LoggedValue',
            'LoadedMessages'
          ],
    methods: {
        likeItem(){
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
        Update() {
            var em=this.email;
            var value = localStorage['URLroot'];
            axios.post( value + '/registration/update',
                  {
                     id: this.idregister,
                     csrfToken: myToken.csrfToken,
                     firstname: this.firstname,
                     lastname: this.lastname,
                     phone: this.phone,
                     email: this.email,
                     address: this.address
                  }
            ).then(function (response) {
                localStorage.setItem( 'message', 'success|Thank you. Your values has been updated|1' );
                location.href = response.data.redirect;              
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });            
        },      
    },
    mounted() {
            this.values= JSON.parse(this.ProductValue, function (key, value) {
              return value;
            });
            this.category_id=this.values.category_id;
            this.name=this.values.name;
            this.description=this.values.description;
            this.type_id=this.values.type_id;
            this.amount=this.values.amount;
            this.tradde_number=this.values.tradde_number;
            this.sell_id=this.values.sell_id;
            this.buy_id=this.values.buy_id;
            this.status=this.values.status;
            this.image_url=this.values.image_url;
            this.firstname=this.values.firstname;
            this.lastname=this.values.lastname;
            this.email=this.values.email;
            this.phone=this.values.phone;
            this.category=this.values.category;
            if(this.LoggedValue>0){
              this.logged=true;
            }
            //JSON.parse(this.LoadedMessages);
            console.log(this.LoadedMessages)
    }     
}
</script>