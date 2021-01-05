<template>
<div class="container">  
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> My Trades</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="product in items.data">
            <div class="card card-item">
              <a :href="Urlproduct + product.id"><img :src="product.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h6 class="product-name">
                  {{ product.name }}
                </h6>
                <h6 class="product-name">$ {{ product.amount }}</h6>
              </div>

            </div>
        </div>
      </div>      
    </div>
    <div class="card-footer" v-if="count > 14">
      <ul class="pagination justify-content-center">
      <li class="page-item" v-for="n in items['links']">
      <a class="page-link" :href="n.url" v-if="n.label==='&laquo; Previous'">Previous</a>
      <a class="page-link" :href="n.url" v-else-if="n.label==='Next &raquo;'">Next</a>                    
      <a class="page-link" :href="n.url" v-else>{{ n.label }}</a>  
      </li>
      <li class="page-item"><a class="page-link" :href="items['last_page_url']">Last</a></li>
      </ul>
    </div>     
  </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                items:JSON.parse(this.TradeValues),
                IdItem:'',
                ImageActive:'',
                count:0,
                Urlproduct: localStorage['URLroot'] + '/product/view/',
            }
        },
        props: [ 'TradeValues' ],        
        methods: {

        },
        mounted() {
        },        
    }
</script>