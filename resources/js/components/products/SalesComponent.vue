<template>
    <div class="container">
      <div class="row">
        <h3><span class="categorieslink"> Your Sales Published</span></h3>
         <div class="col-lg-10">
              <div class="row align-items-center">
                <div class="col" v-for="item in GetProducts.data">
                  <div class="p-5">      
                    <div class="card">
                    <a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block"></a>
                    <div class="card-body">
                      <h4 class="card-title">
                      <a :href="Urlproduct + item.id">{{ item.name }}</a>
                      </h4>
                      <h5>$ {{ item.amount }}</h5>
                      <p class="card-text">{{ item.description }}</p>
                    </div>
                    <div class="card-footer">
                      <h4 class="card-title">
                        <div class="row">
                          <div class="col">
                            <p class="text-left"><a :href="EditUrl + item.id"><i class="fas fa-edit"></i></a></p>
                          </div>
                          <div class="col">
                            <p class="text-right"><i class="fas fa-trash-alt"></i></p>
                          </div>
                        </div>
                      </h4>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <ul class="pagination justify-content-center">
                    <!--<li class="page-item"><a class="page-link">Previous</a></li>-->
                    <li class="page-item" v-for="n in GetProducts['links']">
                    <a class="page-link" :href="n.url" v-if="n.label==='&laquo; Previous'">Previous</a>
                    <a class="page-link" :href="n.url" v-else-if="n.label==='Next &raquo;'">Next</a>                    
                    <a class="page-link" :href="n.url" v-else>{{ n.label }}</a>  
                    </li>
                    <li class="page-item"><a class="page-link" :href="GetProducts['last_page_url']">Last</a></li>
                  </ul>
                </div>
              </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    components: {
    },    
    data() {
        return {
         contactos: {},
         findbyname:'', 
         items: '',
         EditUrl: localStorage['URLroot'] + '/product/edit/',
         Urlproduct: localStorage['URLroot'] + '/product/',
         GetProducts:'',
       }
    },
    props: [ 'SalesValues' ],    
    methods: {
 
    },
    mounted() {
      axios.get( localStorage['URLroot'] + '/GetSales').then(response => (this.GetProducts = response.data));
    }
  }
</script>