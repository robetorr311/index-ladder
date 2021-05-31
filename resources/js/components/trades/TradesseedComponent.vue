<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trades that may interest you </h5></div>
      <div class="card-body">
      <div class="row">
        <div class="col">          
            <div class="row align-items-center">
              <div class="col-lg-4" v-for="item in items.data">
                <div class="card card-item commodities_item">
                  <a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block commodities_image"></a>
                  <div class="card-body">
                    <h6 class="text-center product-name">{{ item.name }}</h6>
                    <h6 class="text-center product-name">$ {{ item.amount }}</h6>
                    <h6 class="text-center product-name">Status: {{ item.status_name }}</h6>
                    <h6 class="text-center product-name">Category: {{ item.category }}</h6>
                    <h6 class="text-center product-name" v-if="item.description.length>82">{{ item.description.substring(0, 82) }} ... <a :href="Urlproduct + item.id">See More</a></h6>
                    <h6 class="text-center product-name" v-else>{{ item.description }}</h6>
                    <p class="text-center"><getqualify-component :user-value="item.host_user_id"></getqualify-component></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <ul class="pagination justify-content-center">
                  <li class="page-item" v-for="n in items['links']">
                  <a class="page-link" :href="n.url" v-if="n.label==='&laquo; Previous'">Previous</a>
                  <a class="page-link" :href="n.url" v-else-if="n.label==='Next &raquo;'">Next</a>                    
                  <a class="page-link" :href="n.url" v-else>{{ n.label }}</a>  
                  </li>
                  <li class="page-item"><a class="page-link" :href="items['last_page_url']">Last</a></li>
                </ul>
              </div>
            </div>
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
      GetValues:[],
      Urlproduct: localStorage['URLroot'] + '/product/view/',
      PartnerURL: localStorage['URLroot'] + '/user/show/',
      items: JSON.parse(this.TradeValues),
    };
  },
  props: [
    'TradeValues'
  ],
  methods: {
    SetTable(response){
      this.GetValues=response;
    },
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetBySeed').then(response => (this.SetTable(response.data)));
  },        
}
</script>
