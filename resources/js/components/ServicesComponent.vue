<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Last Services Published</h5></div>
      <div class="card-body">      
      <div class="row align-items-center">
        <div class="col"  v-for="service in GetServ">
          <div class="p-5">      
            <div class="card">
              <a :href="Urlproduct + service.id"><img :src="service.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a :href="Urlproduct + service.id">{{ service.name }}</a>
                </h4>
                <h5>$ {{ service.amount }}</h5>
                <p class="card-text" v-if="service.description.length>82">{{ service.description.substring(0, 82) }} ... <a :href="Urlproduct + service.id">See More</a></p>
                <p class="card-text" v-else>{{ service.description }}</p>
              </div>
              <div class="card-footer">
                <a :href="UrlUser + service.user_id"><getqualify-component :user-value="service.user_id"></getqualify-component></a>
              </div>
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
         GetServ: '',
         UrlUser: localStorage['URLroot'] + '/user/show/',
       }
    },
    props: [],
    mounted() {
      axios.get(localStorage['URLroot'] + '/topfourServ').then(response => (this.GetServ = response.data));
    }
  }
</script>
