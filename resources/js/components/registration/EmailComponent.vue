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
                <h3 class="title-landing title_landing_i" >Your email...</h3>  
                <div class="card">
                    <div class="card-body">
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col-md-5">
                            <ValidationProvider name="email" rules="required|email" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-keyboard"></i></span>
                          </div>
                              <input v-model="email" type="text" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <br><p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <div class="text-center">
                            <button type="submit" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" name="">Submit</button>
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
      email: '',
      Checkemail: 'none',
      Validatedemail: false
     }
    },
    methods: {
        Verify(response){
          this.Checkemail=response.success;
          setTimeout(() => {
            this.Checkemail='none';
          },6000);           
        },
        onSubmit() {
          var value=this.email;
          axios.get( localStorage['URLroot'] + '/profile/SendRecoverPassEmail/' + value).then(response => (this.Verify(response.data)));
          setTimeout(() => {
            window.close();
          },6000);
        },
    },
    mounted() {    
    }    
}
</script>