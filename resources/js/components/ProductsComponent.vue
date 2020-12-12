<template>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <h2> Last Products </h2>
        </div>
      </div>      
      <div class="row align-items-center">
        <div class="col-lg-3"  v-for="product in GetProduct">
          <div class="p-5">      
            <div class="card">
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a :href="Urlproduct + product.id">{{ product.name }}</a>
                </h4>
                <h5>$ {{ product.amount }}</h5>
                <p class="card-text" v-if="item.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + product.id">See More</a></p>
                <p class="card-text" v-else>{{ product.description }}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
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
         Urlproduct: localStorage['URLroot'] + '/product/',
         GetProduct: null
       }
    },
    props: [],
    mounted() {
          axios.get(localStorage['URLroot'] + '/topfourPro').then(response => (this.GetProduct = response.data));
        }
    }
</script>