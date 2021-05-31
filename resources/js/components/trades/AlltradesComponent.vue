<template>
    <div class="card"><div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Index Ladder Gallery </h5></div>
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
</template>
<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
import CategoriesComponent from "../categories/CategoriesComponent.vue";
  export default {
    components: {
      CategoriesComponent,
      GetqualifyComponent
    },    
    data() {
        return {
         contactos: {},
         findbyname:'', 
         items: JSON.parse(this.TradeValues),
         Urlproduct: localStorage['URLroot'] + '/product/view/',
         resp:0,
       }
    },
    computed: {
    },    
    methods: {
      GetQualify(user){
        axios.get( localStorage['URLroot'] + '/GetQualify/' + user).then(response => ( this.resp=parseInt(response.data)));
        return this.resp;
      },
      FindByName(){
        var ValueToFind=this.findbyname;
        var Url=localStorage['URLroot'];
        axios.get(Url + '/product/findbyn/' + ValueToFind)
        .then(function(response) {
            location.href = response.data.redirect;
        });     
      },   
    },
    props: [ 'TradeValues' ],
    mounted() {
    }
  }
</script>