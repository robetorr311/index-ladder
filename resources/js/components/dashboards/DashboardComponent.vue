<template>
	    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-2">
              <div class="row">
                <div class="col">
                  <userinfo-component></userinfo-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <slidefav-component></slidefav-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Trading Partners</h5></div>
                    <div class="card-body">
                      <p class="card-text">Component here....</p>
                    </div>
                  </div>
                </div>
              </div>               
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-star"></i> Score and comments</h5></div>
                    <div class="card-body">
                      <p class="card-text">Info component here....</p>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
            <div class="col">
              <div v-if="CenterContent===0">
                <tradetable-component></tradetable-component>
              </div>
              <div v-else-if="CenterContent===1">
                <profile-component></profile-component>
              </div>
              <div v-else-if="CenterContent===2">
                <addnewproduct-component></addnewproduct-component>
              </div>
              <div v-else-if="CenterContent===3">
                <product-component :product-value="ProductID"></product-component>
              </div>
              <div v-else-if="CenterContent===4">
                <editproduct-component :product-value="ProductID"></editproduct-component>
              </div>
              <div v-else-if="CenterContent===5">
                <profiletrader-component :trader-value="TraderID"></profiletrader-component>
              </div>
              <div v-else-if="CenterContent===6">
                <alltrades-component :trade-values="TradeValues" ></alltrades-component>
              </div>
              <div v-else-if="CenterContent===7">
                <alltrades-component :trade-values="TradeValues" ></alltrades-component>
              </div>
              <div v-else-if="CenterContent===8">
                <alltrades-component :trade-values="TradeValues" ></alltrades-component>
              </div>
              <div v-else-if="CenterContent===9">
                <favorites-component :trade-values="TradeValues"></favorites-component>
              </div>
              <div v-else>
                <tradetable-component></tradetable-component>
              </div>              
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div class="col">
                  <getusers-component></getusers-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <favusers-component></favusers-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Completed Trades</h5></div>
                    <div class="card-body">
                      <p class="card-text">Component here....</p>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Cancelled Trades</h5></div>
                    <div class="card-body">
                      <p class="card-text">Component here....</p>
                    </div>
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
      },
      data() {
        return {
          CenterContent: 0,
          ProductID:'',
        }
      },
    props: [ 
      'RoutesValues',
      'TradeValues'
    ],
    methods: {
      ShowCenterContent(){
        let route=this.RoutesValues;
        let dashboard= localStorage['URLroot'] + '/dashboard';
        let profile= localStorage['URLroot'] + '/profile';
        let addnew= localStorage['URLroot'] + '/product/addnew';
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
          default:
            this.CenterContent=0;
            break;
          }
      }
    },    
    mounted() {
      this.ShowCenterContent();
      console.log(this.RoutesValues + " dashboard component");
    }
  }
</script>