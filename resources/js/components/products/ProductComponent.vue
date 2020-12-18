<template>
  <ValidationObserver v-slot="{ invalid }">
          <div class="card">
            <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trade Info</h5></div>
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
                    <p class="text-left" v-if="Getuser.logg>0">
                      <i class="far fa-heart cursor" v-if="Getlike.success==='Fail'" @click="likeItem"></i>
                      <i class="fas fa-heart" v-else></i>
                    </p>
                    <p class="text-left" v-else>
                      <i class="far fa-heart cursor" v-if="like" @click="likeItem"></i>
                      <i class="fas fa-heart" v-else></i>
                    </p>                    
                  </div>
                  <div class="col">
                    <p class="text-right">
                      <i class="fas fa-shopping-cart cursor" v-if="Getuser.logg>0" @click="addtoCart"></i>
                    </p>
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
          product_id: '',
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
          username: '',
          email: '',
          phone: '',
          category: '',
          values: '',
          HomeUrl: localStorage['URLroot'],
          logged: false,
          like: true,
          Getuser: '',
          Getlike: ''
      }
    },
    props: [
            'ProductValue',
          ],
    methods: {
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
        GetValues(response){
            this.product_id=response.id;
            this.category_id=response.category_id;
            this.name=response.name;
            this.description=response.description;
            this.type_id=response.type_id;
            this.amount=response.amount;
            this.tradde_number=response.tradde_number;
            this.sell_id=response.sell_id;
            this.buy_id=response.buy_id;
            this.status=response.status;
            this.image_url=response.image_url;
            this.username=response.username;
            this.email=response.email;
            this.phone=response.phone;
            this.category=response.category;
        },
    },
    mounted() {
            axios.get( localStorage['URLroot'] + '/getUserName').then(response => (this.Getuser = response.data));
            axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));
            axios.get( localStorage['URLroot'] + '/GetLike/'+ this.ProductValue).then(response => (this.Getlike = response.data));
            axios.post( localStorage['URLroot'] + '/notifications/SetView',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.ProductValue
            }
          ).then(response => (console.log(response.data)));
    }     
}
</script>