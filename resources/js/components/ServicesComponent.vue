<template>
      <div class="row">
          <div class="col" v-for="service in GetServ">
            <div class="box">
              <div class="icon"><a :href="Urlproduct + service.id"><img :src="service.image_url" class="img-fluid mx-auto d-block"></a></div>
              <h6 class="title">{{ service.name }}</h6>
              <h6 class="description" v-if="service.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + service.id">See More</a></h6>
              <h6 class="description" v-else>{{ service.description }}</h6>
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
