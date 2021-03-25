<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container">                
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-12">      
              <span  v-if="CheckEmailExist.success==='Success'" class="alert alert-danger">
                <strong>Fail!! This Email Already Exist!!! </strong>
              </span>
              <span  v-else></span>
              <span  v-if="failed" class="alert alert-danger">
                <strong>Fail!! There is an issue sending verification email. Please contact to Index Ladder Help Desk. </strong>
              </span>
              <span  v-else></span>              
            </div>
        </div>           
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header sign_up_header text-center">Sign Up</div>
                    <div class="card-body">
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center">
                          <div class="col">
                            <ValidationProvider name="username" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                              <input v-model="username" type="text" class="form-control" name="username" placeholder="Name">
                            </div>
                            <br><p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>                     
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                        <div class="col-md-12">
                            <ValidationProvider name="email" rules="required"  v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input v-model="email" type="text" class="form-control" name="email" @change="VerifyIfExist" placeholder="Email">
                            </div>
                              <br><p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-12">
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
      repassword: '',
      email: '',
      show : false,
      CheckEmailExist:'',
      valuesEmail: '',
      failed: false }
    },
    methods: {
        VerifyIfExist(){
          var em=this.email;
          axios.get(localStorage['URLroot'] + '/registration/CheckEmailExist/' + em).then(response => (this.CheckEmailExist = response.data)); 
        },
        SendSMS(){
          axios.get(localStorage['URLroot'] + '/registration/SendSMS/This is a test message/+584125066130');
        },
        onSubmit() {
            var em=this.email;
            if(this.CheckEmailExist.success=='Success'){
              console.log('Fail in validation rule');
            }
            else {
              axios.post( localStorage['URLroot'] + '/registration/addnew',
                  {
                     csrfToken: myToken.csrfToken,
                     username: this.username,
                     password: this.password,
                     repassword: this.repassword,
                     email: this.email
                  }
              ).then(function (response) {
                  localStorage.setItem( 'message', 'success|Thank you. In order to complete the registration, please click on the verification link sent to '+ em +'|1' );
                  location.href = localStorage['URLroot'];  
              })
              .catch((error) => {
                console.log('FAILURE!!');
                this.$showValidationErrors(error.response.data);
              });            
            }
        },
    },
    mounted() {
          axios.get(localStorage['URLroot'] + '/registration/CheckEmailExist/test@test.com').then(response => (this.CheckEmailExist = response.data)); 
    }     
}
</script>