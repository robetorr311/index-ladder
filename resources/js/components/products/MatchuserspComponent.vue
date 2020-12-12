<template>
<div class="container">
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-users"></i> Traders that match with your categories</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="users in items.data">
            <div class="card">      
              <a :href="UrlUser + users.id"><img :src="users.image_url"  class="img-fluid mx-auto d-block rounded-circle" width="100px"></a>
              <div class="text-center">
              <h4 class="card-title">{{ users.name }}</h4>
              <p class="card-text">{{ users.email }}</p>
              <p class="card-text">{{ users.phone }}</p>
              </div>
          </div>
      </div>
    </div>
    </div>
    <div class="card-footer">
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
    components: {
    },    
    data() {
        return {
         items: JSON.parse(this.UserValues),
         UrlUser: localStorage['URLroot'] + '/user/show/'
       }
    },
    methods: {
  
    },
    props: [ 'UserValues' ],
    mounted() {
      console.log(this.UserValues + 'Matchusersp Component')
    }
  }
</script>