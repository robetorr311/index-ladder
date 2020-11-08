<template>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <h2> Last Products</h2>
        </div>
      </div>      
      <div class="row align-items-center">
        <div class="col-lg-3"  v-for="product in products">
          <div class="p-5">      
            <div class="card">
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a :href="Urlproduct + product.id">{{ product.name }}</a>
                </h4>
                <h5>$ {{ product.amount }}</h5>
                <p class="card-text">{{ product.description }}</p>
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
         products: JSON.parse(this.ProductsValues),
         Urlproduct: localStorage['URLroot'] + '/product/'
       }
    },
    props: [ 'ProductsValues' ],
    mounted() {    
        }
    }
</script>