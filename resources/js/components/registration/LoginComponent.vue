<template>
  <ValidationObserver v-slot="{ invalid }">
    <hr class="sidebar-divider">
    <section id="loginsection">
    <div class="container">
    <div class="alert alert-danger" v-if="fail">
      <strong>Fail!</strong> Please click on the verification link sent to your email or you have a wrong Email, Username or Password!! 
    </div>          
      <div id="formregistration">
      <div class="row justify-content-md-center">
        <div class="col-lg-6 order-lg-2">
          <div class="">
              <div class="card-deck">
                <div class="card noborder login">
                    <div class="card-body">
                      <div class="text-center"><span class="landing_title_3">Sign in </span></div>
                      <div class="text-center"><span class="landing_title_4">Use your Index Ladder Account</span></div>
                      <form @submit.prevent="onSubmit">
                      <div class="row justify-content-center user_name_login">
                        <div class="col">
                            <ValidationProvider name="username" rules="required" v-slot="{ errors }">
                              <input v-model="username" type="text" class="form-control landing_controls" name="username" placeholder="Email or Username">
                              <br><p><span class="has-error">{{ errors[0] }}</span></p>                            
                            </ValidationProvider>
                        </div>                  
                      </div>
                      <div class="row justify-content-center">
                        <div class="col">
                            <ValidationProvider name="password" rules="required" v-slot="{ errors }">
                              <input v-model="password" type="password" class="form-control landing_controls" name="password" placeholder="Password">
                            </ValidationProvider>
                        </div>                    
                      </div>
                      <div class="row justify-content-center paddtop">
                        <div class="col">
                          <a :href="UrlRecover" class="link_title_card">Forgot your Password?</a>
                        </div> 
                      </div>
                      <div class="row justify-content-center">
                        <div class="col">
                          Not your computer? Use a Private Window to sign in. <a :href="UrlRegistration" class="link_title_card">Learn more  </a>                        
                        </div>
                      </div>                       
                      <div class="row justify-content-center">
                        <div class="col">
                          <a :href="UrlRegistration" class="link_title_card">Create Account</a>
                        </div>
                          <div class="col">
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
        <div class="col-lg-6 order-lg-1">
          <div class="p-5 title-landing border-landing">
            <p><span class="landing_title_3">Lack of Money should not stop a person from trading</span></p>
            <p><span class="landing_title_4">Index Ladder platform making trade easier </span></p>
            <span class="landing_title_4">
            <ul class="ul_landing_4">
              <li>Market of reusable and used goods and services</li>
              <li>Find a better exchange for your good with Utility based valuation</li>
              <li>Reducing risk with direct access to commodities and services</li>
              <li>Services and skills based trade </li>
              <li>Cost free setup to access the market</li>
              <li>No charge on posting your commodities or services</li>
              <li>No fee for trade deals*</li>
              <li>Simplified no cost contracts</li>
            </ul>
            <p>Happy Trading</p> 
            </span>
            <span class="landing_title_6"><p>* Though value based trade exchange is encouraged, options for transactions in currency are available with third party online payment systems such as Stripe (Note: Usually money transactions have associated per transaction costs and we have no control over their cost structure)</p></span> 
          </div>
              </div>
            </div>
           </div>
        </div>
      </section>
      <section class="padding_middle_first">
      <div class="container"> 
      <div class="row justify-content-md-center padding_middle_inner">
        <div class="col">
          <span class="padding_middle_1">72% of U.S. ebay sellers</span><span class="padding_middle_2">
          surveyed say buying pre-owned products has become more common in recent years</span>
        </div>
        <div class="col">
          <span class="padding_middle_1">68% of eBay U.K.</span><span class="padding_middle_2">sellers said they started selling pre-owned goods in 2020 to make extra cash</span>
        </div>
        <div class="col">
          <span class="padding_middle_1">$5,660 USD </span><span class="padding_middle_2">estimated average value of pre-owned items sitting around sellers' houses in Canada</span>
        </div>
       </div>
       <hr class="sidebar-divider color_sidebar">                 
      </div>
      </section>
      <section class="economic">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col text-center">
         <iframe title="vimeo-player" src="https://player.vimeo.com/video/462830046" class="economic_video" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-4">
          <p><span class="economic_title_1">Economic Opportunity</span></p>
          <p><span class="landing_title_4">According to Ebay, approximately 85% of people in the U.S. who have sold pre-owned goods on eBay discovered these items within their own home. In fact, the study shows that Americans have an average of 36 household items that can be resold, with $3,675 worth of value sitting in those goods.*</span>
          </p>
          <p class="text-right"><button type="button" class="btn btn-secondary" name="">Download</button></p>
        </div>

        </div>                
      </div>
      </section>
      <section class="padding_middle">
      <div class="container"> 
      <div class="row justify-content-md-center padding_middle_inner">
        <div class="col">
          <span class="padding_middle_1">81% of Gen Zers (aged 19 to 24)</span> <span class="padding_middle_2">say that buying pre-owned goofs has become more common in 2020</span>
        </div>
        <div class="col">
          <span class="padding_middle_1">39% of German sellers surveyed</span> <span class="padding_middle_2">said they sell pre-owned items because of its positive environmental impact</span>
        </div>
        <div class="col">
          <span class="padding_middle_1">720,000 metric ton of Carbon</span> <span class="padding_middle_2">emission were conserved through people selling their pre-owned electronics and apparel on eBay</span>
          </div>
        </div>
        <hr class="sidebar-divider color_sidebar">                
      </div>
      </section>
      <section class="key_facts">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col text-center">
          <p class="KijijiCanada2">Total value of all second-hand transactions in Canada in 2018 was <span class="KijijiCanada2_bold">$27.3 billion</span> </p>
          <a type="button" href="https://www.kijiji.ca/kijijicentral/app/uploads/2019/10/Kijiji-Index-Report-2019_EN_final_pages-2_compressed.pdf" class="btn btn-primary button_aqua"> Download the 2019 Index Report <i class="fas fa-download"></i></a>
          <img :src="URLkij2" class="img-fluid URLkij2">
        </div>
        <div class="col text-center">
          <img :src="URLkij1" class="img-fluid URLkij1">
        </div>
        </div>                
      </div>
      </section>
      <section class="employed">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col-lg-8 text-center">
          <p class="employed_title">Employed full time: Median usual weekly real earnings: Wage and salary workers: 16 years and over </p>
          <iframe src="https://fred.stlouisfed.org/graph/graph-landing.php?g=Dagf&width=670&height=475" scrolling="no" frameborder="0" class="iframe_employed" allowTransparency="true" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4">
          <span class="employed_landing_title_4">
          <p><ul class="ul_landing_4">
            <li>Real wages (wages adjusted to factor in inflation or price variation over time) in United States, UK and in general shows increasing or positive trend. (not substantial)</li>
            <li>Factors such as technological, scientific and optimizing engineering models with much higher output, resulted in better and low coats for most commodities and services.</li>
            <li>Software simulation and data tools, resulting in  a flood of new and improved quality electronics at a faster rate is also resulting in e-waste explosion and has devastating effects on our planet.</li>
            <li>A reuse or circular economy can help with those issues, by reducing waste, better return on investments, more business opportunities, jobs and productivity. </li>
          </ul>
        </p>
          </span>
        </div>
        </div>                
      </div>
      </section>
      <section class="urban">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col-lg-10">
          <iframe src="https://ourworldindata.org/grapher/urbanization-vs-gdp?time=2015..latest" loading="lazy" class="urban_iframe"></iframe>
        </div>
        </div>                
      </div>
      </section> 
      <section class="purchasing">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col">
          <p class="text-center"><span class="purchasing_landing_title_3">$1 USD in 1851 had a buying power of $ 33.80 USD in 2019, 
at a staggering rate of over 20% annual reduction in consumers purchasing power.</span></p>
          <img :src="URLDollar" class="img-fluid  mx-auto d-block purchasing_image">
        </div>
        </div>                
      </div>
      </section>
      <section class="employed">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col text-center">
          <iframe class="iframe_video" src="https://www.youtube.com/embed/4ZcKwIyxoBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col">
          <span class="second_video_title">
          <p class="text-center">Creating a Circular Economy for Electronics through the Management of e-waste.
          </p>
          </span>
        </div>
        </div>                
      </div>
      </section> 
      <section class="the_market">
      <div class="container"> 
      <div class="row justify-content-md-center padding_middle_inner">
        <div class="col text-center">
          <span class="market_padding_middle_1">The Market</span> 
        </div>                
      </div>
      </div>
      </section>      
      <section class="commodities">
      <div class="container"> 
      <div class="row justify-content-md-center padding_middle_inner">
        <div class="col-lg-9 text-center">
          <span class="commodities_title_4">Commodities - All listed ads should be hyperlinked and should take viewer to the Ad's page</span> 
        </div>                
      </div>
      </div>
      </section>
      <section class="purchasing">
      <div class="container"> 
        <div class="row justify-content-md-center padding_middle_inner">
          <div class="col-lg-9 text-center">
            <commodities-component></commodities-component>  
          </div>              
        </div>
      </div>
      </section>
      <section class="commodities">
      <div class="container">        
      <div class="row justify-content-md-center padding_middle_inner">
        <div class="col-lg-9 text-center">
          <span class="commodities_title_4">Services - All listed ads should be hyperlinked and should take viewer to the Ad's page</span>
        </div>                
      </div>
      </div>            
      </section>
      <section class="purchasing">
      <div class="container"> 
        <div class="row justify-content-md-center padding_middle_inner">
          <div class="col-lg-9 text-center">
            <services-component></services-component>         
          </div>              
        </div>
      </div>        
      </section> 
      <section class="urban">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col-lg-10">
        <iframe src="https://ourworldindata.org/grapher/gross-national-income-per-capita" loading="lazy" class="urban_iframe"></iframe>
        </div>
      </div>
      </div>
      </section>
      <section class="urban">
      <div class="container"> 
      <div class="row justify-content-md-center">
        <div class="col-lg-10">
          <p class="text-center title_Picture4MB">CPI or price of food commodities since 1900</p>
          <img :src="Picture4MB" class="img-fluid mx-auto d-block Picture4MB">
        </div>
      </div>
      </div>
      </section>    
      

    </ValidationObserver>  	
</template>

<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
import CommoditiesComponent from "../CommoditiesComponent.vue";
import ServicesComponent from "../ServicesComponent.vue"; 
import SkilssComponent from "../SkilssComponent.vue";
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
    CommoditiesComponent,
    ServicesComponent,
    SkilssComponent
  },
  data() {
    return {
      username: '',
      password: '',
      URLImagelogo: localStorage['URLroot'] + '/images/index-ladder-named-logo.png',
      URLkij2: localStorage['URLroot'] + '/images/KijijiCanada2.png',
      URLkij1: localStorage['URLroot'] + '/images/KijijiCanada.png',
      URLDollar: localStorage['URLroot'] + '/images/Dollar-Depreciation layer 1.jpg.png',
      Picture4MB: localStorage['URLroot'] + '/images/Picture4MB.png',
      UrlRecover: localStorage['URLroot'] + '/recover',
      UrlRegistration: localStorage['URLroot'] + '/registration',
      UrlHome: localStorage['URLroot'],
      fail:false,
     }
    },
    methods: {
        showFail(){
          var value = localStorage['message'];
          var str=value.split('|');
          if(value.length>0){
            this.show=str[2];
            if(this.show==3){
              this.fail=true;
              setTimeout(() => {
                this.fail=false;
              },6000); 
            }
          }          
        },
        onSubmit() {
            var login = localStorage['URLroot'] + '/login-user';
            var setnumber = localStorage['URLroot'] + '/setnumber';
            var dashboard = localStorage['URLroot'] + '/dashboard';
            var twostep = localStorage['URLroot'] + '/twosteplogin/' + this.username;
            axios.post( localStorage['URLroot'] + '/authenticate' ,
                  {
                     csrfToken: myToken.csrfToken,
                     email: this.username,
                     password: this.password,
                  }
            ).then(function (response) {
                var red=response.data.redirect;
                switch (red) {
                  case login:
                    localStorage.setItem( 'message', 'fail|Wrong User or Password!!!|3' );
                    location.href = response.data.redirect;
                    break;
                  case setnumber:
                    location.href = response.data.redirect;
                    break;
                  case twostep:
                    location.href = response.data.redirect;
                    break;
                  case dashboard:
                    localStorage.setItem( 'message', 'success|Welcome to the Index Ladder!!!|1' );
                    location.href = response.data.redirect;
                }
            })
            .catch((error) => {
              console.log('FAILURE!!');
              this.$showValidationErrors(error.response.data);
            });           
        },
    },
    mounted() {
     this.showFail();    
    }    
}
</script>