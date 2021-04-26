<template>
      <div class="row">
          <div class="col"  v-for="product in GetProduct">
            <div class="box">
              <div class="icon"><a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a></div>
              <h6 class="title">{{ product.name }}</h6>
              <h6 class="description" v-if="product.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + product.id">See More</a></h6>
              <h6 class="description" v-else>{{ product.description }}</h6>
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
