<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div v-if="show">  
                <span  v-if="success==='Success'" class="alert alert-success">
                  <strong>6 digit code sent!! Please Enter the code!!! </strong>
                </span>
              <span  v-else class="alert alert-success"><strong>Fail!! Phone number invalid!!! </strong></span>
            </div>
        </div>
      </div>
        <div class="row justify-content-center">
            <div class="col-md-12">      
                <div class="card">
                    <div class="card-header sign_up_header text-center">Phone Number Verification</div>
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="col-md-12">
                            <ValidationProvider name="phone" rules="required" v-slot="{ errors }">
                              <div class="d-flex justify-content-center" >
                                <vue-tel-input v-model="phone" v-bind="bindProps"></vue-tel-input>
                              </div>
                              <br><p><span class="has-error">{{ errors[0] }}</span></p>
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
import { VueTelInput } from 'vue-tel-input'
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
          VueTelInput,
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
            phone: '',
            bindProps:{
              mode: 'international'
            }
          };
        },
        methods: {
            showSuccess(response){
              this.success=response.success;         
              this.show=true;
              location.href = localStorage['URLroot'] + '/verify_phone';
            },
            submitForm() {
              axios.post( localStorage['URLroot'] + '/registration/phonenumber' ,
              {
                csrfToken: myToken.csrfToken,
                phone: this.phone,
              }
              ).then(response => (this.showSuccess(response.data)));
            },
        },
        mounted() {
            console.log(this.UserId + 'Component successfully mounted.')
        },        
    }
</script>