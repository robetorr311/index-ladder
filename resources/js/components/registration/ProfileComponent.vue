<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container"> 
        <div id="formregistration">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Your Registration Info </div>
                    <div class="card-body">
                      <form>
                      <div class="row justify-content-center">
                          <div class="col-md-5">
                            <ValidationProvider name="firstname" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                              <input v-model="firstname" type="text" class="form-control" name="firstname"  :disabled="disabled" placeholder="Name">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>
                        <div class="col-md-5">
                            <ValidationProvider name="lastname" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                              <input v-model="lastname" type="text" class="form-control" name="lastname" :disabled="disabled" placeholder="Lastname">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>                        
                      </div>                                          
                      <div class="row justify-content-center">
                        <div class="col-md-5">
                            <ValidationProvider name="phone" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                              <span class="input-group-text" v-if="PhoneVerified.success==='Fail'"><a :href="UrlVerify" target="blank"><i class="far fa-check-circle"></i> Unverified</a></span>
                              <span class="input-group-text" v-else><i class="fas fa-check-circle"></i> Verified</span>
                          </div>
                              <input v-model="phone" type="text" class="form-control" name="phone" :disabled="disabled" placeholder="Phone Number">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>
                        <div class="col-md-5">
                            <ValidationProvider name="email" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              <span class="input-group-text"><i class="fas fa-check-circle"></i> Verified</span>
                              </div>
                              <input v-model="email" type="text" class="form-control" name="email" :disabled="disabledEmail" placeholder="Email">
                              <span class="has-error">{{ errors[0] }}</span>
                            </div>
                            </ValidationProvider>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <ValidationProvider name="address" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                          </div>
                              <textarea v-model="address" class="form-control" name="address" :disabled="disabled" placeholder="Address">
                              </textarea>
                              <span class="has-error">{{ errors[0] }}</span>
                              </div>
                        </ValidationProvider>
                        </div>                                                
                      </div>
                      <div class="row justify-content-center" v-if="PhoneVerified.success==='Success'">
                          <div class="col-md-10" v-if="IsTwoStepEnaled.success==='Fail'">
                            <button type="button" @click.stop.prevent="EnableTwoStep" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name=""><i class="fas fa-shield-alt"></i> Enable 2 Step Verify</button><span class="categorieslink">{{ CodeSentMessage }} </span>
                          </div>
                          <div class="col-md-10" v-else>
                            <button type="button" @click.stop.prevent="DisableTwoStep" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name=""><i class="fas fa-shield-alt"></i> Disable 2 Step Verify</button><span class="categorieslink">{{ CodeSentMessage }} </span>
                          </div>                          
                      </div>
                      <div class="row justify-content-center" v-if="ActiveTS">
                          <div class="col-md-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" v-model="code" name="code" placeholder="Code">
                              <div class="input-group-append">
                                <button class="btn btn-secondary" @click.stop.prevent="ActiveTwoStep"><i class="fas fa-shield-alt"></i> Enable</button>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row justify-content-center" v-if="DisableTS">
                          <div class="col-md-10">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" v-model="code" name="code" placeholder="Code">
                              <div class="input-group-append">
                                <button class="btn btn-secondary" @click.stop.prevent="DeactivateTwoStep"><i class="fas fa-shield-alt"></i> Disable</button>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                              </div>
                              <avatar-component :url-avatar="UrlAva"></avatar-component>
                            </div>
                          </div>
                      </div>                                                                   
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <button type="button" @click="EditRegister" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name="">Edit</button>
                            <button type="button" @click="Update" v-show="showsave" class="btn btn-secondary rounded-pill mt-5" name="">Save</button>
                          </div>
                      </div>
                    </form>
                    </div>
                  </div>
                  <div class="card">
                  <div class="card-header">Upload Your Documents </div>                    
                    <div class="card-body">
                      <form>
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                              </div>
                              <picture-component :url-picture="UrlPic"></picture-component>
                            </div>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                              </div>
                              <card-component :url-card="UrlCar"></card-component>
                            </div>
                        </div>                        
                      </div>                                           
                      <div class="row justify-content-center">
                          <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <license-component :url-license="UrlLic"></license-component>
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
import PictureComponent from "../PictureComponent.vue";
import CardComponent from "../CardComponent.vue";
import LicenseComponent from "../LicenseComponent.vue";
import AvatarComponent from "../AvatarComponent.vue";
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
    PictureComponent,
    CardComponent,
    LicenseComponent,
    AvatarComponent },
  data() {
    return {
      firstname: '',
      lastname: '',
      phone: '',
      email: '',
      address: '',
      picture_id: '',
      card_id: '',
      license_id: '',
      comments: '',
      values: '',
      disabled: true,
      disabledEmail: true,
      showedit: true,
      showsave: false,
      hasImage: false,
      image: null,
      idregister:'',
      UrlPic: this.UrlPicture,
      UrlLic: this.UrlLicense,
      UrlCar: this.UrlCard,
      UrlAva: this.UrlAvatar,
      UrlVerify: localStorage['URLroot'] + '/profile/SendVerifySMS',
      PhoneVerified: '',
      ActiveTS: false,
      code: '',
      CodeSentMessage: '',
      CodeSent:'',
      ChkCode: '',
      IsTwoStepEnaled:'',
      DisableTS: false
      }
    },
    props: [
            'registrationValues',
            'UrlPicture',
            'UrlLicense',
            'UrlCard',
            'UrlAvatar',
          ],
    methods: {
        EditRegister(){
           this.disabled=false;
           this.showedit=false;
           this.showsave=true; 
        },
        EnableTwoStep(){
          axios.get(localStorage['URLroot'] + '/profile/SendCode').then(response => (this.CodeSent = response.data));
          this.CodeSentMessage=' The 6 digit code has been sent...';
          setTimeout(() => {
            this.CodeSentMessage='';
          },6000);           
          this.ActiveTS=true;
        },
        DisableTwoStep(){
          axios.get(localStorage['URLroot'] + '/profile/SendCode').then(response => (this.CodeSent = response.data));
          this.CodeSentMessage=' The 6 digit code has been sent...';
          setTimeout(() => {
            this.CodeSentMessage='';
          },6000);           
          this.DisableTS=true;
        },        
        Update() {
            var em=this.email;
            var value = localStorage['URLroot'];
            axios.post( value + '/registration/update',
                  {
                     id: this.idregister,
                     csrfToken: myToken.csrfToken,
                     firstname: this.firstname,
                     lastname: this.lastname,
                     phone: this.phone,
                     email: this.email,
                     address: this.address
                  }
            ).then(function (response) {
                localStorage.setItem( 'message', 'success|Thank you. Your values has been updated|1' );
                location.href = response.data.redirect;              
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });            
        },
        ActiveTwoStep(){
          axios.post( localStorage['URLroot'] + '/profile/EnableTwoStep',
            {
              csrfToken: myToken.csrfToken,
              code: this.code
            }
          ).then(response => (this.ChkCode = response.data));
          location.reload();
        },
        DeactivateTwoStep(){
          axios.post( localStorage['URLroot'] + '/profile/DeactivateTwoStep',
            {
              csrfToken: myToken.csrfToken,
              code: this.code
            }
          ).then(response => (this.ChkCode = response.data));
          location.reload();
        },              
    },
    mounted() {
            axios.get(localStorage['URLroot'] + '/profile/PhoneVerifyed').then(response => (this.PhoneVerified = response.data));
            axios.get(localStorage['URLroot'] + '/profile/IsTwoStepEnaled').then(response => (this.IsTwoStepEnaled = response.data));            
            this.values= JSON.parse(this.registrationValues, function (key, value) {
              return value;
            });
            this.idregister= this.values.id;
            this.firstname= this.values.firstname;
            this.lastname= this.values.lastname;
            this.phone= this.values.phone;
            this.email= this.values.email;
            this.address= this.values.address;
    }     
}
</script>