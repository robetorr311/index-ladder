<template>
  <ValidationObserver v-slot="{ invalid }">
                <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Profile Form</h5></div>
                    <div class="card-body">
                      <form>
                      <div class="row justify-content-center">
                          <div class="col">
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
                        <div class="col">
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
                        <div class="col">
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
                      </div>
                      <div class="row justify-content-center">
                        <div class="col">
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
                          <div class="col">
                            <ValidationProvider name="address" rules="required|max:249" v-slot="{ errors }">
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
                      <div class="row justify-content-center">
                          <div class="col">
                            <div class="text-center">
                            <button type="button" @click="EditRegister" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name="">Edit</button>
                            <button type="button" @click="Update" v-show="showsave" class="btn btn-secondary rounded-pill mt-5" name="">Save</button>
                          </div>
                          </div>
                      </div>
                      <div class="row justify-content-center" v-if="PhoneVerified.success==='Success'">
                          <div class="col" v-if="IsTwoStepEnaled.success==='Fail'">
                            <div class="text-center">
                            <button type="button" @click.stop.prevent="EnableTwoStep" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name=""><i class="fas fa-shield-alt"></i> Enable 2 Step Verify</button><span class="categorieslink">{{ CodeSentMessage }} </span>
                            </div>
                          </div>
                          <div class="col" v-else>
                            <div class="text-center">
                            <button type="button" @click.stop.prevent="DisableTwoStep" v-show="showedit" class="btn btn-secondary rounded-pill mt-5" name=""><i class="fas fa-shield-alt"></i> Disable 2 Step Verify</button><span class="categorieslink">{{ CodeSentMessage }} </span>
                            </div>
                          </div>                          
                      </div>
                      <div class="row justify-content-center" v-if="ActiveTS">
                          <div class="col">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" v-model="code" name="code" placeholder="Code">
                              <div class="input-group-append">
                                <button class="btn btn-secondary" @click.stop.prevent="ActiveTwoStep"><i class="fas fa-shield-alt"></i> Enable</button>
                              </div>
                            </div>
                          </div>
                      </div>                        
                      <div class="row justify-content-center" v-if="DisableTS">
                          <div class="col">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" v-model="code" name="code" placeholder="Code">
                              <div class="input-group-append">
                                <button class="btn btn-secondary" @click.stop.prevent="DeactivateTwoStep"><i class="fas fa-shield-alt"></i> Disable</button>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                          <div class="col">
                              <avatar-component :url-avatar="UrlAva"></avatar-component>
                          </div>
                      </div>
                      <div class="row justify-content-center" v-if="stripe">
                        <div class="col">
                          <div class="text-center">
                          <a type="button" :href="urlStripe" class="btn btn-secondary"><i class="fab fa-cc-stripe cursor stripe"></i> <span class="stripe"> Connect with Stripe</span> </a>
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center" v-else>
                        <div class="col">
                          <div class="text-center">
                            <i class="fab fa-cc-stripe stripe"></i> <span class="stripe"> Connected!!!</span> 
                          </div>
                        </div>
                      </div>                      
                    </form>
                    </div>
                  </div>
                  <profileshare-component></profileshare-component>
                  <div class="card">
                  <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Documents Section</h5></div>
                    <div class="card-body">
                      <form>
                      <div class="row justify-content-center">
                          <div class="col">
                              <picture-component></picture-component>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col">
                              <card-component></card-component>
                        </div>                        
                      </div>                                           
                      <div class="row justify-content-center">
                          <div class="col">
                              <license-component></license-component>
                          </div>                                                
                      </div>
                    </form>
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
import ShareComponent from "./ShareComponent.vue";
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
    ShareComponent,
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
      UrlAva: '',
      UrlVerify: localStorage['URLroot'] + '/profile/SendVerifySMS',
      PhoneVerified: '',
      ActiveTS: false,
      code: '',
      CodeSentMessage: '',
      CodeSent:'',
      ChkCode: '',
      IsTwoStepEnaled:'',
      DisableTS: false,
      stripe: false,
      urlStripe:'',
      }
    },
    props: [ ],
    methods: {
        registrationValues(response){
          this.idregister= response.id;
          this.firstname= response.firstname;
          this.lastname= response.lastname;
          this.phone= response.phone;
          this.email= response.email;
          this.address= response.address;
        },
        UrlAvatar(response){
          this.UrlAva= response.image_url;
        },
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
                location.reload();
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
        SetStripe(response){
          let stripe_id=response.stripe_id;
          if (!stripe_id){
            this.stripe=true;
            axios.get(localStorage['URLroot'] + '/GetUrlConnectStripe').then(response => (this.urlStripe = response.data));
          }
          else {
            this.stripe=false;
          }
        }
    },
    mounted() {
            axios.get(localStorage['URLroot'] + '/profile/PhoneVerifyed').then(response => (this.PhoneVerified = response.data));
            axios.get(localStorage['URLroot'] + '/profile/IsTwoStepEnaled').then(response => (this.IsTwoStepEnaled = response.data));
            axios.get(localStorage['URLroot'] + '/profile/UrlIdent/4').then(response => (this.UrlAvatar(response.data)));
            axios.get(localStorage['URLroot'] + '/profile/registrationValues').then(response => (this.registrationValues(response.data)));
            axios.get(localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.SetStripe(response.data)));
    }     
}
</script>