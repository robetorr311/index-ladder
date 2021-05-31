<template>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-lg-10">
              <div class="row align-items-center">
                <div class="col" v-for="item in items.data">
                  <div class="p-5">      
                    <div class="card commodities_item">
                    <img :src="item.image_url" class="img-fluid mx-auto d-block commodities_image">
                    <div class="card-body">
                      <h6 class="product-name">
                      {{ item.name }}
                      </h6>
                      <h6 class="product-name">
                      {{ item.amount }}
                      </h6>                      
                   <p class="card-text">{{ item.description }}</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <ul class="pagination justify-content-center">
                    <!--<li class="page-item"><a class="page-link">Previous</a></li>-->
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
      </div>
    </div>
</template>

<script>
  export default {
    data() {
        return {
         contactos: {},
         findbyname:'', 
         items: JSON.parse(this.GalleryValues),
         Urlproduct: localStorage['URLroot'] + '/product/view/'
       }
    },
    methods: {
 
    },
    props: [ 'GalleryValues'],
    mounted() {
    }
  }
</script>