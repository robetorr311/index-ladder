<template>
        <div class="container-fluid">
          <div v-if="ShowAdmintables" class="row">
            <div class="col-lg-9">
              <admin-component></admin-component>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div v-if="CenterContent===0">
                <div class="row justify-content-center padding_dashboard">
                  <div class="col">                
                      <profiledashboard-component></profiledashboard-component>
                  </div>
                </div>
              </div>
              <div v-else-if="CenterContent===1">
                <div class="row justify-content-center padding_dashboard">
                  <div class="col">                
                    <profiledashboard-component></profiledashboard-component>
                  </div>
                </div>
              </div>
              <div v-else-if="CenterContent===2">
                <div class="row justify-content-center">
                  <div class="col">
                    <publishtrade-component></publishtrade-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                      <tradeseed-component ></tradeseed-component>
                  </div>
                </div>                
                <div class="row justify-content-center">
                  <div class="col">
                    <tradesall-component></tradesall-component>
                  </div>
                </div>
              </div>
              <div v-else-if="CenterContent===3">
                <div class="row justify-content-center">
                  <div class="col">
                    <trade-component :product-value="ProductID"></trade-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">                
                    <tradeproduct-component :product-value="ProductID"></tradeproduct-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                      <tradeseed-component ></tradeseed-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                      <tradesall-component></tradesall-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                    <slidefav-component></slidefav-component>
                  </div>
                  <div class="col">
                    <inprogress-component></inprogress-component>
                  </div>            
                </div> 
                <div class="row justify-content-center">
                  <div class="col">
                    <products-component></products-component>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col">
                    <skills-component></skills-component>
                  </div>
                </div>              
                <div class="row justify-content-center">
                  <div class="col">
                    <services-component></services-component>
                  </div>
                </div> 
              </div>
              <div v-else-if="CenterContent===4">
                <editproduct-component :product-value="ProductID"></editproduct-component>
              </div>
              <div v-else-if="CenterContent===5">
                <profiletrader-component :trader-value="TraderID"></profiletrader-component>
                <profilepartner-component :user-value="TraderID"></profilepartner-component>
              </div>
              <div v-else-if="CenterContent===6">
                <tradesall-component></tradesall-component>
              </div>
              <div v-else-if="CenterContent===7">
                <tradesall-component></tradesall-component>
              </div>
              <div v-else-if="CenterContent===8">
                <tradesall-component></tradesall-component>
              </div>
              <div v-else-if="CenterContent===9">
                <favorites-component :trade-values="TradeValues"></favorites-component>
                <tradeseed-component ></tradeseed-component>
                <tradesall-component></tradesall-component>                
              </div>
              <div v-else-if="CenterContent===10">
                <notifications-component ></notifications-component>
              </div>              
              <div v-else-if="CenterContent===11">
                    <getusers-component></getusers-component>
                    <partner-component></partner-component>
                    <favusers-component></favusers-component>
              </div>              
              <div v-else>
          <div class="row justify-content-center">
            <div class="col">                
                <tradetable-component></tradetable-component>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col">
                <tradeseed-component ></tradeseed-component>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col">
                <tradesall-component></tradesall-component>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col">
              <slidefav-component></slidefav-component>
            </div>
            <div class="col">
              <inprogress-component></inprogress-component>
            </div>            
          </div> 
          <div class="row justify-content-center">
            <div class="col">
              <products-component></products-component>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col">
              <skills-component></skills-component>
            </div>
          </div>              
          <div class="row justify-content-center">
            <div class="col">
              <services-component></services-component>
            </div>
          </div>                  
              </div>             
            </div>
          </div>
    </div>
</template>
<script>
  import InfoComponent from "../profile/InfoComponent.vue";
  import SliderfavComponent from "../products/SliderfavComponent.vue";
  import TradetableComponent from "../trades/TradetableComponent.vue";
  import GetusersComponent from "../categories/GetusersComponent.vue";
  import FavusersComponent from "../products/FavusersComponent.vue";
  import ProfileComponent from "../profile/ProfileComponent.vue";
  import ProductComponent from "../products/ProductComponent.vue";
  import AddNewProductComponent from "../products/AddNewProductComponent.vue";
  import EditProductComponent from "../products/EditProductComponent.vue";
  import SalesComponent from "../products/SalesComponent.vue";
  import TraderprofileComponent from "../trades/TraderprofileComponent.vue";
  import FavoritesComponent from "../products/FavoritesComponent.vue";
  import InprogressComponent from "../trades/InprogressComponent.vue";
  import CompletedComponent from "../trades/CompletedComponent.vue";
  import CancelledComponent from "../trades/CancelledComponent.vue";
  import ShowalltradesComponent from "../trades/ShowalltradesComponent.vue";  

  export default {
      components: {
        InfoComponent,
        SliderfavComponent,
        TradetableComponent,
        GetusersComponent,
        FavusersComponent,    
        ProfileComponent,
        ProductComponent,
        AddNewProductComponent,
        EditProductComponent,
        SalesComponent,
        TraderprofileComponent,
        FavoritesComponent,
        InprogressComponent,
        CancelledComponent,
        CompletedComponent,
        ShowalltradesComponent,
      },
      data() {
        return {
          CenterContent: 0,
          ProductID:'',
          ShowAdmintables: false,
        }
      },
    props: [ 
      'RoutesValues',
      'TradeValues'
    ],
    methods: {
      ShowCenterContent(response){
        let userid=parseInt(response.id);
        if(userid==1){
          this.ShowAdmintables=true;
        }
        let route=this.RoutesValues;
        let dashboard= localStorage['URLroot'] + '/dashboard';
        let profile= localStorage['URLroot'] + '/profile';
        let addnew= localStorage['URLroot'] + '/product/addnew';
        let notifications=localStorage['URLroot'] + '/notifications';
        let users=localStorage['URLroot'] + '/users';        
        let product= route.search("/product/view/");     
        let edit = route.search("/product/edit");
        let trader=route.search("/user/show/");
        let alltra=route.search("/trades/all/");
        let findby=route.search("/product/findbycategory");
        let findbyn=route.search("/product/findbyname");
        let routepro=localStorage['URLroot'] + '/product/view';
        let routeedit=localStorage['URLroot'] + '/product/edit';
        let routetrad=localStorage['URLroot'] + '/user/show';
        let routeallt=localStorage['URLroot'] + '/trades/all';
        let routefindbyc=localStorage['URLroot'] + '/product/findbycategory';
        let routefindbyn=localStorage['URLroot'] + '/product/findbyname';
        let favorites=localStorage['URLroot'] + '/favorites';
        if(product>0){
          let resp = route.split('/');
          routepro=routepro + '/' + resp[5];
          this.ProductID = resp[5];
        }
        if(edit>0){
          let rese = route.split('/');
          routeedit=routeedit + '/' + rese[5];
          this.ProductID = rese[5];
        }
        if(trader>0){
          let trad = route.split('/');
          routetrad=routetrad + '/' + trad[5];
          this.TraderID = trad[5];
        }
        if(alltra>0){
          routeallt=route;
        }
        if(findby>0){
          routefindbyc=route;
        }
        if(findbyn>0){
          routefindbyn=route;
        }                         
        switch (route) {
          case profile:
            this.CenterContent=1;
            break;
          case addnew:
            this.CenterContent=2;
            break;
          case routepro:
            this.CenterContent=3;
            break;
          case routeedit:
            this.CenterContent=4;
            break;
          case routetrad:
            this.CenterContent=5;
            break;
          case routeallt:
            this.CenterContent=6;
            break;
          case routefindbyc:
            this.CenterContent=7;
            break;
          case routefindbyn:
            this.CenterContent=8;
            break;
          case favorites:
            this.CenterContent=9;
            break;
          case notifications:
            this.CenterContent=10;
            break;            
          case users:
            this.CenterContent=11;
            break;            
          default:
            this.CenterContent=0;
            break;
          }
      }
    },    
    mounted() {
      axios.get(localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.ShowCenterContent(response.data)));
      //this.ShowCenterContent();
      console.log(this.RoutesValues + " dashboard component");
    }
  }
</script>