<template>
    <div class="card"><div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Index Ladder Gallery </h5></div>
      <div class="row">
        <div class="col">          
          <div class="input-group mb-3">
            <input type="text" v-model="findbyname" class="form-control form-control-lg" placeholder="Search">
              <div class="input-group-append">
                <button class="btn-secondary" type="submit" @click="FindByName"><i class="fas fa-search"></i> Search</button>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col" v-for="item in items.data">
                <div class="card card-item">
                  <a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block" height="255px"></a>
                  <div class="card-body">
                    <h6 class="product-name">
                      <div class="row">
                        <div class="col">
                          <p class="text-left">{{ item.name }}</p>
                        </div>
                      </div>                      
                      <div class="row" v-if="item.amount">
                        <div class="col">
                          <p class="text-left">Valued in: $ {{ item.amount }}</p>
                        </div>
                      </div>
                      </h6>
                      <p class="card-text">Status: {{ item.status_name }}</p>
                      <p class="card-text">Category: {{ item.category }}</p>
                      <p class="card-text" v-if="item.description.length>82">{{ item.description.substring(0, 82) }} ... <a :href="Urlproduct + item.id">See More</a></p>
              <p class="card-text" v-else>{{ item.description }}</p>
                  </div>
                    <div class="card-footer">
                      <getqualify-component :user-value="item.host_user_id"></getqualify-component>
                    </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <ul class="pagination justify-content-center">
                    <!--<li class="page-item"><a class="page-link">Previous</a></li>-->
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