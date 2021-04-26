<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">
        <span  v-if="Checkemail=='Success'" class="alert alert-Success">
          <strong>Check your email inbox for a Password Reset email... </strong>
        </span>
        <span  v-else-if="Checkemail=='Fail'" class="alert alert-danger">
          <strong>Your email don't exist in our records... </strong>
        </span>        
        <span  v-else></span>
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3 class="title-landing title_landing_i" >Change Your password</h3>  
                <div class="card">
                    <div class="card-body">
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                        <div class="col-md-5">
                            <ValidationProvider name="password" rules="confirmed:confirmation|required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa fa-key"></i></span>
                          </div>
                              <input v-model="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br><p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>
                        <div class="col-md-5">
                            <ValidationProvider name="repassword" rules="required" vid="confirmation" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa fa-key"></i></span>
                          </div>
                              <input v-model="repassword" type="password" class="form-control" name="repassword" placeholder="Re type password">
                            </div>
                            <br><p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>                        
                      </div> 
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <div class="text-center">
                            <button type="submit" :disabled="invalid" class="btn btn-secondary" name="">Submit</button>
                          </div>
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
      password: '',
      repassword: '',      
      Checkemail: 'none',
      Validatedemail: false
     }
    },
    props: [
      'emailValue'
    ],
    methods: {
        Verify(response){
          this.Checkemail=response.success;
          setTimeout(() => {
            this.Checkemail='none';
          },6000);           
        },
        onSubmit() {
            axios.post( localStorage['URLroot'] + '/changepassword' ,
                  {
                     csrfToken: myToken.csrfToken,
                     email: this.emailValue,
                     password: this.password,
                  }
            ).then(function (response) {
              location.href = response.data.redirect;
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