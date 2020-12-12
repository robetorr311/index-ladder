<template>
    <div class="card"><div class="card-header"><h5 class="card-title"><i class="fas fa-heart"></i> My Favorites </h5></div>
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col" v-for="item in items.data">        
          <div class="card">
          <a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block"></a>
          <div class="card-body">
          <h6 class="product-name">
            <a :href="Urlproduct + item.id">{{ item.name }}</a>
              </h6>
                <h6 class="product-name">$ {{ item.amount }}</h6>
                <p class="card-text" v-if="item.description.length>82">{{ item.description.substring(0, 82) }} ... <a :href="Urlproduct + item.id">See More</a></p>
                <p class="card-text" v-else>{{ item.description }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
          </div>
          </div>
        </div>
      </div>
          <div class="card-footer">
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
</template>

<script>
  export default {
    components: {
    },    
    data() {
        return {
         contactos: {},
         findbyname:'', 
         items: JSON.parse(this.TradeValues),
         Urlproduct: localStorage['URLroot'] + '/product/view/',
         GetProducts:'',
       }
    },
    props: [ 
      'TradeValues'
    ],
    methods: {
      CutText(text){
        let sln = text.length;
        let res= text;
        let newtext=text;
        if(sln>82){
          res = txt.substring(0, 82);
          newtext = res + '... <a href="#">See More</a>';
        }
        return newtext;
      },
    },
    mounted() {
    }
  }
</script>