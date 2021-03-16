<template>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">  
           <categories-component></categories-component>
        </div>
        <div class="col-lg-10">
          <div class="input-group mb-3">
            <input type="text" v-model="findbyname" class="form-control form-control-lg" placeholder="Search">
              <div class="input-group-append">
                <button class="btn-secondary" type="submit" @click="FindByName"><i class="fas fa-search"></i> Search</button>
              </div>
          </div>
              <div class="row align-items-center">
                <div class="col" v-for="item in items.data">
                  <div class="p-5">      
                    <div class="card">
                    <a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block"></a>
                    <div class="card-body">
                      <h6 class="product-name">
                      <a :href="Urlproduct + item.id">{{ item.name }}</a>
                      </h6>
                <p class="card-text" v-if="item.description.length>82">{{ item.description.substring(0, 82) }} ... <a :href="Urlproduct + item.id">See More</a></p>
                <p class="card-text" v-else>{{ item.description }}</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
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
import CategoriesComponent from "../categories/CategoriesComponent.vue";
  export default {
    components: {
      CategoriesComponent
    },    
    data() {
        return {
         contactos: {},
         findbyname:'', 
         items: JSON.parse(this.GalleryValues),
         Urlproduct: localStorage['URLroot'] + '/product/view/'
       }
    },
    methods: {
      FindByName(){
        var ValueToFind=this.findbyname;
        var Url=localStorage['URLroot'];
        axios.get(Url + '/product/findbyn/' + ValueToFind)
        .then(function(response) {
            location.href = response.data.redirect;
        });     
      },   
    },
    props: [ 'GalleryValues','CountLogged' ],
    mounted() {
    }
  }
</script>