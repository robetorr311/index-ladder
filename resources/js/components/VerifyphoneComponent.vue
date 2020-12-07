<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div v-if="show">  
                <span  v-if="success==='Success'" class="alert alert-success">
                  <strong>Success!! Your Phone has been Verified!!! </strong>
                </span>
              <span  v-else class="alert alert-success"><strong>Fail!! 6 digit code number invalid!!! </strong></span>
            </div>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header sign_up_header text-center">6 digits Code Number Verification</div>
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                          <div class="d-flex justify-content-center" >  
                            <button type="button" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" @click="submitForm">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
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
            show: false,
            GetId: '',
            IsSaved:'',
            UserId: '',
            success: '',
            code: '',
            bindProps:{
              mode: 'international'
            }
          };
        },
        methods: {
            showSuccess(response){
              console.log(response.success);
              if(response.success=='Success'){
                location.href = localStorage['URLroot'] + '/dashboard';
              }
            },
            submitForm() {
              axios.post( localStorage['URLroot'] + '/profile/verifySMS/SixDigits' ,
              {
                csrfToken: myToken.csrfToken,
                code: this.code,
              }
              ).then(response => (this.showSuccess(response.data)));
            },
        },
        mounted() {
            console.log(this.UserId + 'Component successfully mounted.')
        },        
    }
</script>