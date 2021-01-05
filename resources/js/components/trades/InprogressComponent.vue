<template>
  <div class="card">
   <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Trades in Progress</h5></div>
    <div class="card-body">
      <div id="catalog" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <a :href="Urlproduct + IdItem"><img :src="ImageActive" width="100%"></a>
            </div>
            <div class="carousel-item" v-for="product in GetValues">
                <a :href="Urlproduct + product.id" ><img :src="product.image_url" width="100%"></a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#catalog" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#catalog" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
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
                Urlproduct: localStorage['URLroot'] + '/product/view/',
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
            axios.get(localStorage['URLroot'] + '/GetInProgress').then(response => (this.SelectedValues(response.data)));
        },        
    }
</script>