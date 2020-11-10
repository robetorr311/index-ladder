<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">
        <message-component></message-component>
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Login Form </div>
                    <div class="card-body">
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col-md-5">
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
                        <div class="col-md-5">
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
                          <div class="col-md-10">
                            <button type="submit" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" name="">Submit</button>
                          </div>
                                                                    
                      </div>
                    </form>
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