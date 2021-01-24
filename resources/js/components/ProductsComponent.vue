<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Last Products Published</h5></div>
      <div class="card-body">    
      <div class="row align-items-center">
        <div class="col"  v-for="product in GetProduct">
            <div class="card">
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h6 class="card-title">
                  <a :href="Urlproduct + product.id">{{ product.name }}</a>
                </h6>
                <h5>$ {{ product.amount }}</h5>
                <p class="card-text" v-if="product.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + product.id">See More</a></p>
                <p class="card-text" v-else>{{ product.description }}</p>
              </div>
              <div class="card-footer">
                <a :href="UrlUser + product.user_id"><getqualify-component :user-value="product.user_id"></getqualify-component></a>
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
         Urlproduct: localStorage['URLroot'] + '/product/view/',
         GetProduct: '',
         UrlUser: localStorage['URLroot'] + '/user/show/',
       }
    },
    props: [],
    mounted() {
          axios.get(localStorage['URLroot'] + '/topfourPro').then(response => (this.GetProduct = response.data));
        }
    }
</script>