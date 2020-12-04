<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> My Trades</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="product in GetValues">
            <div class="card">
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  {{ product.name }}
                </h4>
                <h5>$ {{ product.amount }}</h5>
              </div>
            </div>
        </div>
      </div>      
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
                Urlproduct: localStorage['URLroot'] + '/product/',
            };
        },
        methods: {
          SelectedValues(response){
            this.GetValues=response;
            let id='';
            let image='';     
            $.each(response, function(key, value) {
              id=value.id;
              image=value.image_url;
            });
            this.IdItem=id;
            this.ImageActive=image;
          }, 
        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/GetTrades').then(response => (this.SelectedValues(response.data)));
        },        
    }
</script>