<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">
    <div class="alert alert-danger" v-if="fail">
      <strong>Fail!</strong> Please click on the verification link sent to your email or you have a wrong Email or Password!! 
    </div>          
        <div id="formregistration">
      <div class="row align-items-center">
        <div class="col-lg-8 order-lg-2">
          <div class="">
              <div class="card-deck">
                <div class="card noborder login">
                    <div class="card-body">
                      <div class="text-center"><h2 class="title_card">Log in </h2></div>
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col-lg-8">
                            <ValidationProvider name="username" rules="email" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                              <input v-model="username" type="text" class="form-control" name="username" placeholder="Email">
                            </div>
                              <br><p><span class="has-error">{{ errors[0] }}</span></p>                            </ValidationProvider>
                        </div>                  
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <ValidationProvider name="password" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa fa-key"></i></span>
                          </div>
                              <input v-model="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            </ValidationProvider>
                        </div>                    
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-lg-8">
                            <div class="text-center">
                              <button type="submit" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" name="">Submit</button>
                            </div>
                          </div>
                      </div>
                    </form>
                      <div class="row justify-content-center paddtop">
                        <div class="col-md-4">
                          <a :href="UrlRecover" class="title_card"><i class="fas fa-key"></i> Forgot your Password?</a>
                        </div> 
                        <div class="col-md-4">
                          <a :href="UrlRegistration" class="title_card"><i class="fas fa-user-alt"></i> Do you want become a trader?</a>
                        </div>
                      </div>                    
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 order-lg-1">
          <div class="p-5 title-landing border-landing"><span class="title_landing_i">
            <p>Exchange, Sell, Trade & Resource Sharing Platform</p> 
            <p>Connect with Billions</p>
            <p>Create Your Market</p>
            <p>Share your knowledge, experiences, tips, professional services.</p></span>
            <p align="right">INDEX LADDER</p>
          </div>
        </div>
      </div> 
      <div class="row align-items-center padding-logo">
        <div class="col-lg-12">
          <img :src="URLImagelogo" class="img-fluid mx-auto d-block" width="400px">
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
    ValidationProvider
  },
  data() {
    return {
      username: '',
      password: '',
      URLImagelogo: localStorage['URLroot'] + '/images/index-ladder-named-logo.png',
      UrlRecover: localStorage['URLroot'] + '/recover',
      UrlRegistration: localStorage['URLroot'] + '/registration',
      UrlHome: localStorage['URLroot'],
      fail:false,
     }
    },
    methods: {
        showFail(){
          var value = localStorage['message'];
          var str=value.split('|');
          if(value.length>0){
            this.show=str[2];
            if(this.show==3){
              this.fail=true;
              setTimeout(() => {
                this.fail=false;
              },6000); 
            }
          }          
        },
        onSubmit() {
            var login = localStorage['URLroot'] + '/login-user';
            var setnumber = localStorage['URLroot'] + '/setnumber';
            var dashboard = localStorage['URLroot'] + '/dashboard';
            var twostep = localStorage['URLroot'] + '/twosteplogin/' + this.username;
            axios.post( localStorage['URLroot'] + '/authenticate' ,
                  {
                     csrfToken: myToken.csrfToken,
                     email: this.username,
                     password: this.password,
                  }
            ).then(function (response) {
                var red=response.data.redirect;
                switch (red) {
                  case login:
                    localStorage.setItem( 'message', 'fail|Wrong User or Password!!!|3' );
                    location.href = response.data.redirect;
                    break;
                  case setnumber:
                    location.href = response.data.redirect;
                    break;
                  case twostep:
                    location.href = response.data.redirect;
                    break;
                  case dashboard:
                    localStorage.setItem( 'message', 'success|Welcome to the Index Ladder!!!|1' );
                    location.href = response.data.redirect;
                }
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });           
        },
    },
    mounted() {
     this.showFail();    
    }    
}
</script>