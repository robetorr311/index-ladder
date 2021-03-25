<template>
  <ValidationObserver v-slot="{ invalid }">
  <footer class="py-5 bg-black">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
              <h3><span class="footertitle">About US</span></h3>
                <p><a :href="urlHow" class="footerlinks">How it works</a></p>
                <p><a :href="urlNews" class="footerlinks">News</a></p>
                <p><a :href="urlPrivacy" class="footerlinks">Privacy Policy</a></p>
                <p><a :href="urlLegal" class="footerlinks">Legal Terms</a></p>
            </div>
            <div class="col-md-4">
              <h3><span class="footertitle">For Traders</span></h3>
                <p><a :href="urlCategories" class="footerlinks">Categories</a></p>
                <p><a :href="urlForums" class="footerlinks">Forum</a></p>
                <p><a :href="urlBlog" class="footerlinks">Blog</a></p>
                <p><a :href="urlFAQs" class="footerlinks">FAQs</a></p>          
            </div>
            <div class="col-md-4">
              <h3><span class="footertitle">Contact us</span></h3>
                <span class="footertitle"><p>The address of company Index Ladder here...</p></span>
                <span class="footertitle"><p>info@indexladder.com</p></span>
                <div class="row">
                  <div class="col-md-10">
                    <h3><span class="footertitle">Contact form</span></h3>
                      <form @submit.prevent="onSubmit">
                      <div class="row">
                          <div class="col-md-10">
                            <ValidationProvider name="emailcontact" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input type="text" class="form-control" v-model="emailcontact" name="emailcontact" placeholder="Email">
                            </div>
                            <p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-10">
                            <ValidationProvider name="contentcontact" rules="required" v-slot="{ errors }">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
                          </div>
                              <textarea class="form-control" v-model="contentcontact" name="contentcontact" placeholder="content"></textarea>  
                            </div>
                            <p><span class="has-error">{{ errors[0] }}</span></p>
                            </ValidationProvider>
                        </div>                        
                      </div>
                      <button type="submit" :disabled="invalid" class="btn btn-secondary rounded-pill mt-5" @click="SendMessage">Send</button>
                      </form>
                    </div>
                  </div>
            </div>                        
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="social-links">
              <a :href="urlTwitter" class="twitter"><i class="fab fa-twitter"></i></span></a>
              <a :href="urlFacebook" class="facebook"><i class="fab fa-facebook"></i></a>
              <a :href="urlInstagram" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
        </div>        
        <div class="row justify-content-center">
            <div class="col-md-12">
              <p class="m-0 text-center text-white small">Copyright &copy; Index Ladder 2020</p>
            </div>
        </div>              
      
    </div>
    <!-- /.container -->
  </footer>	
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
      emailcontact: '',
      contentcontact:'',
      urlHow:  '',
      urlNews:  '',
      urlPrivacy:  '',
      urlLegal:  '',
      urlCategories:  '',
      urlForums:  '',
      urlBlog:  '',
      urlFAQs:  '',
      urlTwitter: 'https://www.twitter.com',
      urlFacebook: 'https://www.facebook.com',
      urlInstagram: 'https://www.instagram.com' }
    },
    methods: {
        SendMessage() {
            var value = localStorage['URLroot'];
            axios.post( value + '/contacts/send',
                  {
                     email: this.emailcontact,
                     contact: this.contentcontact
                  }
            ).then(function (response) {
                location.reload();
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });            
        },
    },
    mounted() {
          var value = localStorage['URLroot'];
          this.urlHow= value + '/how';
          this.urlNews= value + '/news';
          this.urlPrivacy= value + '/privacy';
          this.urlLegal= value + '/legal';
          this.urlCategories= value;
          this.urlForums= value;
          this.urlBlog= value;
          this.urlFAQs= value + '/faq';
          this.urlTwitter= 'https://www.twitter.com';
          this.urlFacebook= 'https://www.facebook.com';
          this.urlInstagram= 'https://www.instagram.com';
        }
    }
</script>