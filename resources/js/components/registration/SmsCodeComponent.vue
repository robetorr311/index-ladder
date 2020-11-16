<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">
        <span  v-if="CheckCode.success==='Success'" class="alert alert-Success">
          <strong>Success!! Your phone number has been Verified!!! </strong>
        </span>
        <span  v-else></span>
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">SMS 6 Digits Code </div>
                    <div class="card-body">
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col-md-5">
                            <ValidationProvider name="code" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-keyboard"></i></span>
                          </div>
                              <input v-model="code" type="text" class="form-control" name="code" placeholder="6 Digits code">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
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
      code: '',
      CheckCode: '',
      ValidatedCode: false
     }
    },
    methods: {
        onSubmit() {
          axios.post( localStorage['URLroot'] + '/profile/verifySMS/SixDigits' ,
            {
              csrfToken: myToken.csrfToken,
              code: this.code
            }
          ).then(response => (this.CheckCode = response.data));
          setTimeout(() => {
            window.close();
          },6000);
        },
    },
    mounted() {    
    }    
}
</script>