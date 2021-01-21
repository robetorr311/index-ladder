<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trade Number: {{ tradde_number }}</h5></div>
      <div class="card-body">
        <div class="card">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i>                   
            <div class="row">
              <div class="col">
                  <p class="text-left"> {{ name }}</p>
                </div>
                <div class="col">
                  <p class="text-right" v-if="amount">Currently valued in $ {{ amount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="image_url" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ category }} </p>
            <p class="card-text">{{ description }} </p>
          </div>
        </div>
        <div v-if="showAllProposals">
         <showproposals-component :product-value="ProductValue"></showproposals-component>
        </div>        
        <div class="card" v-if="exchange">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i> To be Exchange by                   
            <div class="row">
              <div class="col">
                <p class="text-left"> {{ exchname }}</p>
              </div>
              <div class="col">
                <p class="text-right" v-if="exchamount">Currently valued in $ {{ exchamount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="exchimage_url" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ exchcategory }} </p>
            <p class="card-text">{{ exchdescription }} </p>
          </div>
        </div>
        <div class="card" v-if="showMyProposal">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i>                   
            <div class="row">
              <div class="col">
                <p class="text-left"> {{ pr_name }}</p>
              </div>
              <div class="col">
                <p class="text-right" v-if="pr_amount">Currently valued in $ {{ pr_amount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="pr_image" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ pr_cat }} </p>
            <p class="card-text">{{ pr_desc }} </p>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col" v-if="show_like">
            <p class="text-left" v-if="Getuser.logg>0">
              <i class="far fa-heart cursor" v-if="Getlike.success==='Fail'" @click="likeItem"></i>
              <i class="fas fa-heart" v-else></i>
            </p>
            <p class="text-left" v-else>
              <i class="far fa-heart cursor" v-if="like" @click="likeItem"></i>
              <i class="fas fa-heart" v-else></i>
            </p>                    
          </div>
          <div v-if="showSendPropose">
            <newproposal-component :product-value="ProductValue" ></newproposal-component>
          </div>
          <div v-else></div>
          <div v-if="showCancel">
            <finishtrade-component :product-value="ProductValue" :finish-value="1"></finishtrade-component>
          </div>
          <div v-else></div>
          <div v-if="showFinish" >
            <finishtrade-component :product-value="ProductValue" :finish-value="2"></finishtrade-component>
          </div>
          <div v-else></div>
          <div v-if="showConfirm" >
            <finishtrade-component :product-value="ProductValue" :finish-value="3"></finishtrade-component>
          </div>                    
          <div v-else></div>
          <div class="col" v-if="showPaybutton">
            <p class="text-right" v-if="stripe">
              <button type="button" class="btn btn-secondary" @click="checkout"><i class="fab fa-cc-stripe cursor" style="font-size:40px"></i><span class="stripe"> Pay </span></button>
              </p>
              <p class="text-right" v-else>
                <a :href="ProfileURL" type="button" class="btn btn-secondary"><i class="fab fa-cc-stripe cursor stripe"></i> <span class="stripe">Set Stripe in Profile</span></a>
              </p>                    
          </div> 
          <div v-else></div>
        </div>
      </div>                           
    </div>
    <div v-if='partner'>
        <tradepartner-component :product-value="ProductValue" :proposal-value="ProposalValue" :user-value="UserValue"></tradepartner-component>
    </div>
    <div v-else></div>
    <div v-if="showHostUser">
        <tradehostuser-component :user-value="host_user_id"></tradehostuser-component>
    </div>
    <div v-else></div> 
</ValidationObserver>
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
import ShowproposalsComponent from "./ShowproposalsComponent.vue";
import FinishtradeComponent from "./FinishtradeComponent.vue";
import TradepartnerComponent from "./TradepartnerComponent.vue";
import TradehostuserComponent from "./TradehostuserComponent.vue";
import NewproposalComponent from "./NewproposalComponent.vue";

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
    ShowproposalsComponent,
    FinishtradeComponent,
    TradepartnerComponent,
    TradehostuserComponent,
    NewproposalComponent,
  },
  data() {
    return {
          exchange:false,
          product_id: '',
          category_id: '',
          name: '',
          description: '',
          type_id: '',
          amount: '',
          exchproduct_id: '',
          exchcategory_id: '',
          exchname: '',
          exchdescription: '',
          exchtype_id: '',
          exchamount: '',
          tradde_number: '',
          status: '',
          image_url: '',
          exchimage_url:'',
          username: '',
          email: '',
          phone: '',
          category: '',
          exchcategory:'',
          values: '',
          HomeUrl: localStorage['URLroot'],
          logged: false,
          like: true,
          Getlike: '',
          GetExchange:'',
          exchange_id:'',
          show_accept: '',
          show_like: false,
          host_user_id:'',
          target_user_id:'',
          current_user_id:'',
          starting_at:'',
          date:'',
          success:'',
          Show_Button: '',
          finished:false,
          qualify:0,
          tradde_id:'',
          comments:'',
          accept_trade: false,
          finish_trd_s: false,
          finish_trd_t: false,
          paybutton: false,
          stripe:false,
          ProfileURL:localStorage['URLroot'] + '/profile',
          stripeHandler: null,
          PartnerName:'',
          PartnerEmail:'',
          PartnerPhone:'',
          HostUserName:'',
          HostUserEmail:'',
          HostUserPhone:'',
          HostUserURL:'',
          PartnerQ:'',
          PartnerURL: '',
          showHostUser:false,
          showSendPropose: false,
          IsSaved:'',
          showMyProposal:false,
          partner:false,
          pr_name:'',
          pr_desc:'',
          pr_image:'',
          pr_cat:'',
          pr_amount:'',
          ProposalValue:'',
          UserValue:'',
          showAllProposals:false,
          showCancel:false,
          showFinish:false,
          showPaybutton:false,
          showConfirm: false,
      }
    },
    props: [
            'ProductValue',
          ],
    methods: {
       likeItem(){
          axios.post( localStorage['URLroot'] + '/like',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.product_id
            }
          ).then(response => (this.ChkCode = response.data));
          axios.get( localStorage['URLroot'] + '/GetLike/' + this.ProductValue).then(response => (this.Getlike = response.data));
          this.like=false;
        },
        GetExchangeValues(response){
            this.exchproduct_id=response.id;
            this.exchcategory_id=response.category_id;
            this.exchname=response.name;
            this.exchdescription=response.description;
            this.exchtype_id=response.type_id;
            this.exchamount=response.amount;
            this.exchimage_url=response.image_url;
            this.exchcategory=response.category;
            axios.get( localStorage['URLroot'] + '/AcceptedProposal/' + this.tradde_id).then(response => (this.ProposalValue=response.data.id));
            let current=parseInt(this.current_user_id);
            let host=parseInt(this.host_user_id);
            let target=parseInt(this.target_user_id);
            let st=parseInt(this.status);
            switch(current){
              case host:
                switch(st){
                  case 2:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=true;
                    this.exchange=true;
                    this.getPartner(1);
                  break;
                  case 4:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=false;
                    this.showConfirm=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                  break;
                  case 6:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                  break;
                  case 7:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                    this.showConfirm=true;
                  break;
                  case 8:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(1);
                    this.showConfirm=false;
                  break;                 
                  default:
                  break;
                }              
              break;
              case target:
                switch(st){
                  case 2:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=true;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(2);
                  break;
                  case 4:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=false;
                    this.showConfirm=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(2);
                  break;                
                  case 6:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=true;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(2);
                  break;
                  case 7:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.showConfirm=false;
                    this.SetTitles(2);
                  break;
                  case 8:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.showConfirm=false;
                    this.SetTitles(2);
                  break;                                 
                  default:
                  break;
                }              
              break;
              default:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=false;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=false;
                    this.showConfirm=false;
              break;
            }
        },
        Getuser(response){
          let stripe_id=response.stripe_id;
            if(!stripe_id){
              this.stripe=false;
            }
            else{
              this.stripe=true;
            }
            this.current_user_id=response.id;
            let st=parseInt(this.status);
            if(this.host_user_id==this.current_user_id){
              switch(st){
                case 1:
                  this.show_like= false;
                  this.showSendPropose=false;
                  this.showAllProposals=true;
                  this.partner=false;
                  this.showHostUser=false;
                break;
                case 2:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 4:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 6:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 7:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 8:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                 
                default:
                break;
              }
            }
            else{
              switch(st){
                case 1:
                  this.show_like= true;
                  this.partner=false;
                  this.showHostUser=true;
                  axios.get( localStorage['URLroot'] + '/GetQualify/' + this.host_user_id).then(response => (this.SetPartnerQ(response.data)));
                  axios.get( localStorage['URLroot'] + '/CountProposal/' + this.tradde_id).then(response => (this.SetOneProporsal(response.data)));
                break;
                case 2:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 4:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                
                case 6:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 7:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 8:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                                 
                default:
                break;
              }
            }             
        },
        SetOneProporsal(response){
          let count=parseInt(response);
          if(count>0){
            this.showSendPropose=false;
            axios.get( localStorage['URLroot'] + '/GetProposal/' + this.tradde_id).then(response => (this.GetProposal(response.data)));
          }
          else{
            this.showSendPropose=true;
          }
        },
        GetProposal(response){
          this.ProposalValue=response.id;
          this.pr_name=response.name;
          this.pr_desc=response.description;
          this.pr_image=response.image_url;
          this.pr_cat=response.category;
          this.pr_amount=response.amount;
          this.showMyProposal=true;
        },
        GetValues(response){
            this.product_id=response.product_id;
            this.category_id=response.category_id;
            this.name=response.name;
            this.description=response.description;
            this.type_id=response.type_id;
            this.amount=response.amount;
            this.tradde_number=response.tradde_number;
            this.host_user_id=response.host_user_id;
            this.target_user_id=response.target_user_id;
            this.tradde_id=response.tradde_id;
            this.status=response.status;
            this.image_url=response.image_url;
            this.username=response.username;
            this.email=response.email;
            this.phone=response.phone;
            this.category=response.category;
            this.HostUserName=response.username;
            this.HostUserEmail=response.email;
            this.HostUserPhone=response.phone;
            this.exchange_id=response.exchange_id;
            this.HostUserURL=localStorage['URLroot'] + '/user/show/' + response.host_user_id;             
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser(response.data)));
        },
        SetConfirmed(response){
          let resp=JSON.stringify(response).length;
          let st=parseInt(this.status);
          if(resp<3){
            if(st==4){
              this.finished=true;
            }
            if(st==3){
              this.finished=true;
            }            
          }
        },
        getPartner(value){
          if(value==1){
            this.UserValue=this.target_user_id;
          }
          else{
            this.UserValue=this.host_user_id; 
          }
        },
        SetTitles(value){
          let srctype=parseInt(this.type_id);
          let srctypee=parseInt(this.exchtype_id);
          if(value==1){
            this.getPartner(1);
            switch(srctype){
              case 1331:
                this.showPaybutton=false;
              break;
              case 1329:
                this.showPaybutton=false;
              break;
              case 1330:
                this.showPaybutton=false;
              break;
              case 1796:
                this.showPaybutton=false;                  
              break;
              default:
              break;
            }
          }
          else{
            this.getPartner(2);
            switch(srctypee){
              case 1331:
                this.showPaybutton=false;
                break;
              case 1329:
                this.showPaybutton=false;
                break;
              case 1330:
                this.showPaybutton=false;
                break;
              case 1796:
                if(parseInt(this.status)==2){
                  this.showPaybutton=true;
                }
                else{
                  this.showPaybutton=false;
                }
                break;
              default:
              break;
            }
          }
        },
        includeStripe( URL, callback ){
                let documentTag = document, tag = 'script',
                    object = documentTag.createElement(tag),
                    scriptTag = documentTag.getElementsByTagName(tag)[0];
                object.src = '//' + URL;
                if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
                scriptTag.parentNode.insertBefore(object, scriptTag);
        },        
        initStripe() {
                this.stripeHandler = StripeCheckout.configure({
                    key: 'pk_test_51I6rk8IwloEcEGxLuFCGtGeMMBrieDxwLTx2qzxy2zFP8RtMtR4Oh8TMDafevEJpOfXEPUJQoLZn6YBCREwUIZLr00FC0zH1yN',
                    image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                    locale: 'auto',
                    zipCode: true,
                    token: (token) => {
                        //showLoader();
                        console.log(token);
                        axios.post( localStorage['URLroot'] + '/stripe/getpayment/' + this.tradde_id, token)
                            .then(response => {
                                window.scrollTo(0,0);
                                console.log(response);
                            })
                            .catch(error => {
                                console.log(error.response);
                            });
                        location.reload();
                    }
                });
                window.addEventListener('popstate', () => {
                    this.stripeHandler.close();
                });
        },
        checkout() {
                this.stripeHandler.open({
                    name: 'Index Ladder',
                    image: '/images/marker.png',
                    description: '',
                    amount:  parseInt(this.amount)*100
                });
                event.preventDefault();
        },
    },
    mounted() {
            axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));      
            axios.get( localStorage['URLroot'] + '/GetLike/'+ this.ProductValue).then(response => (this.Getlike = response.data));
            axios.post( localStorage['URLroot'] + '/notifications/SetView',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.ProductValue
            }
          ).then(response => (console.log(response.data)));
          this.includeStripe('js.stripe.com/v3/', function(){
                this.initStripe();
          }.bind(this) );
            
    }     
}
</script>