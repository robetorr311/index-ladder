<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> My Trades</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4" v-for="product in GetValues">
            <div class="card card-item commodities_item" >
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h6 class="text-center product-name">{{ product.name }}</h6>
                <h6 class="text-center product-name">{{ product.amount }}</h6>
                <h6 class="text-center product-name">Status: {{ product.status_name }}</h6>
                <h6 class="text-center product-name">Category: {{ product.category }}</h6>
                <h6 class="text-center product-name" v-if="product.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + product.id">See More</a></h6>
                <h6 class="text-center product-name" v-else>{{ product.description }}</h6>
              </div>              
              <a type="button" :href="UrlEdit + product.id" class="btn btn-secondary" v-if="product.status_name==='Published/Pending'"><i class="fas fa-pencil-alt"></i> Edit Values</a>             
            </div>
        </div>
      </div>      
    </div>
    <div class="card-footer" v-if="count > 14">
      <a type="button" :href="UrlAllMyTrades" target="blank" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show more</a> 
    </div>
    <div v-else>
    </div>    
  </div>
</template>

<script>
    export default {
        data() {
            return {
                GetValues:'',
                IdItem:'',
                ImageActive:'',
                count:0,
                Urlproduct: localStorage['URLroot'] + '/product/view/',
                UrlAllMyTrades: localStorage['URLroot'] + '/mytrades/all',
                UrlAllTrades: localStorage['URLroot'] + '/trades/all',
                UrlEdit: localStorage['URLroot'] + '/product/edit/',
            };
        },
        methods: {
          SelectedValues(response){
            this.GetValues=response;
            let id='';
            let image='';
            let c=0;
            $.each(response, function(key, value) {
              id=value.id;
              image=value.image_url;
              c=c+1;
            });
            this.count=c;
            this.IdItem=id;
            this.ImageActive=image;
          }, 
        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/GetTrades').then(response => (this.SelectedValues(response.data)));
        },        
    }
</script>