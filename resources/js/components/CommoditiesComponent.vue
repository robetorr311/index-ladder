<template>
      <div class="row">
          <div class="col"  v-for="product in GetProduct">
            <div class="card card-item commodities_item">
              <img :src="product.image_url" class="img-fluid mx-auto d-block commodities_image">
              <div class="card-body">
                <h6 class="title">{{ product.name }}</h6>
                <h6 class="title">$ {{ product.amount }}</h6>
              </div>
            </div>
          </div>        
      </div>
</template>
<script>
    export default {
      data() {
        return {
         GetProduct: '',
       }
    },
    props: [],
    mounted() {
          axios.get(localStorage['URLroot'] + '/commodities/view/').then(response => (this.GetProduct = response.data));
        }
    }
</script>
