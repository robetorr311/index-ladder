<template>
  <div class="card"><div class="card-header"><h5 class="card-title"><i class="far fa-user-circle"></i> Profile Trader {{ name }}</h5></div>
  <div class="card-body">
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-info-circle"></i> Trader Info</h5></div>
    <div class="card-body">
      <img :src="UrlAva"  class="img-fluid mx-auto d-block rounded-circle" width="100px">
      <getqualify-component :user-value="traderValue"></getqualify-component>
        <p class="card-text">
         {{ name }}
        </p>
        <p class="card-text">
          {{ email }}
        </p>
        <p class="card-text">
         {{ phone }}
        </p>
        <p class="card-text">
          {{ address }}
        </p>
      </div>
    </div>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trades of {{ name }}</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="product in GetTrades">
            <div class="card" >
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h6 class="product-name">
                  {{ product.name }}
                </h6>
                <h6 class="product-name">{{ product.status_name }}</h6>
              </div>
              <div class="card-footer"><getqualifyf-component :user-value="traderValue" :trade-value="product.tradde_id"></getqualifyf-component></div>
            </div>
        </div>
      </div>      
    </div>
    <div class="card-footer" v-if="count > 14">
      <a type="button" :href="UrlAllMyTrades" target="blank" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show more</a> 
    </div>
    <div class="card-footer" v-else>
      
    </div>    
  </div> 
  </div>
  </div> 
</template>
<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
export default {
  components: {
    GetqualifyComponent,
  },  
  data() {
    return {
      name: '',
      phone: '',
      email: '',
      address: '',
      UrlAva: '',
      GetTrades: '',
      count:0,
      Urlproduct: localStorage['URLroot'] + '/product/view/',
      UrlAllMyTrades: localStorage['URLroot'] + '/mytrades/all',
      UrlAllTrades: localStorage['URLroot'] + '/trades/all',      
    }
  },
  props: [ 'traderValue' ],
  methods: {
    registrationValues(response){
      this.name= response.name;
      this.phone= response.phone;
      this.email= response.email;
      this.address= response.address;
    },
    setTradesValues(response){
      this.GetTrades=response;
      let c=0;
      $.each(response, function(key, value) {
        c=c+1;
      });
      this.count=c;      
    },
    UrlAvatar(response){
      this.UrlAva= response.image_url;;
    }, 
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetTrader/' + this.traderValue).then(response => (this.registrationValues(response.data)));
    axios.get(localStorage['URLroot'] + '/GetTraderTrades/' + this.traderValue).then(response => (this.setTradesValues(response.data)));
    axios.get(localStorage['URLroot'] + '/GetTraderAvatar/' + this.traderValue).then(response => (this.UrlAvatar(response.data)));
  }     
}
</script>