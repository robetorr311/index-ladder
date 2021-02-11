<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-handshake"></i> Trading Partners</h5></div>
      <div class="card-body">
      <div id="getpartners">
      <div class="row">
          <div class="col"  v-for="users in PartnersData">
            <div class="box">
              <div class="icon"><a :href="UrlUser + users.id"><img :src="users.image_url" class="img-fluid mx-auto d-block rounded-circle" width="50px"></a></div>
              <h4 class="title"><a :href="UrlUser + users.id">{{ users.name }}</a></h4>
            </div>
          </div>        
      </div>
      </div>
    </div>
    <div class="card-footer">
    </div>     
  </div>
</template>

<script>
  export default {
    components: {
    },    
    data() {
        return {
         PartnersData: '', 
         UrlUser: localStorage['URLroot'] + '/user/show/'
       }
    },
    methods: {
  
    },
    mounted() {
      axios.get(localStorage['URLroot'] + '/GetPartners').then(response => (this.PartnersData=response.data));
      console.log('Partners Component')
    }
  }
</script>