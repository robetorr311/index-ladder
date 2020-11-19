<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">
        <message-component></message-component>
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card noborder">
                <img :src="URLImagelogo" width="350px" height="350px">
              </div>
              <p></p>
            </div>
            <div class="col-md-8">
                <div class="card noborder">
                    <div class="card-body">
                      <div class="text-center"><h2 class="card-title">Log in </h2></div>
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col-md-8">
                            <ValidationProvider name="username" rules="email" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                              <input v-model="username" type="text" class="form-control" name="username" placeholder="Email">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>                  
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ValidationProvider name="password" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa fa-key"></i></span>
                          </div>
                              <input v-model="password" type="password" class="form-control" name="password" placeholder="Password">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>                    
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-7">
                            <div class="text-center">
                              <button type="submit" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" name="">Submit</button>
                            </div>
                          </div>
                      </div>
                    </form>
                      <div class="row justify-content-center paddtop">
                        <div class="col-md-4">
                          <a :href="UrlHome"><i class="fas fa-key"></i> Forgot your Password?</a>
                        </div> 
                        <div class="col-md-4">
                          <a :href="UrlRegistration"><i class="fas fa-user-alt"></i> Do you want become a trader?</a>
                        </div>
                      </div>                    
                    </div>
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
     }
    },
    methods: {
        onSubmit() {
            var login = localStorage['URLroot'] + '/login-user';
            var twostep = localStorage['URLroot'] + '/twosteplogin/' + this.username;
            axios.post( localStorage['URLroot'] + '/authenticate' ,
                  {
                     csrfToken: myToken.csrfToken,
                     email: this.username,
                     password: this.password,
                  }
            ).then(function (response) {
                if(response.data.redirect===login){
                  localStorage.setItem( 'message', 'error|Login or password incorrect!|1' );
                  location.href = response.data.redirect;
                }
                else{
                  if (response.data.redirect===twostep) {
                    location.href = response.data.redirect;
                  }
                  else {
                    localStorage.setItem( 'message', 'success|Welcome to the Index Ladder!!!|1' );
                    location.href = response.data.redirect;
                  }                   
                }        
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });           
        },
    },
    mounted() {    
    }    
}
</script>