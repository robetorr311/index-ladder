<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> My Trades</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="product in GetValues">
            <div class="card card-item" >
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block" height="255px"></a>
              <div class="card-body">
                    <h6 class="product-name">
                      <div class="row">
                        <div class="col">
                          <p class="text-left">{{ product.name }}</p>
                        </div>
                      </div>                      
                      <div class="row" v-if="product.amount">
                        <div class="col">
                          <p class="text-left">Valued in: $ {{ product.amount }}</p>
                        </div>
                      </div>
                      </h6>
                      <p class="card-text">Status: {{ product.status_name }}</p>
                      <p class="card-text">Category: {{ product.category }}</p>
                      <p class="card-text" v-if="product.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + product.id">See More</a></p>
              <p class="card-text" v-else>{{ product.description }}</p>
                  </div>              
              <div class="card-footer"><a :href="UrlEdit + product.id"><span class="card-title cursor"><i class="fas fa-pencil-alt"></i></span></a> </div>              
            </div>
        </div>
      </div>      
    </div>
    <div class="card-footer" v-if="count > 14">
      <a type="button" :href="UrlAllMyTrades" target="blank" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show more</a> <a type="button" :href="UrlAllTrades" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show all trades</a>
    </div>
    <div class="card-footer" v-else>
      <a type="button" :href="UrlAllTrades" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show all trades</a>
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