<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-heart"></i> My Favorites </h5></div>    
    <div class="card-body">
      <div id="catalog" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img :src="ImageActive" width="100%">
            </div>
            <div class="carousel-item" v-for="product in GetValues">
                <img :src="product.image_url" width="100%">
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
            axios.get(localStorage['URLroot'] + '/GetFavorites').then(response => (this.SelectedValues(response.data)));
        },        
    }
</script>