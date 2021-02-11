<template>
    <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Last Skills Published</h5></div>
      <div class="card-body">
      <div id="topskills">
      <div class="row">
          <div class="col" v-for="skill in GetSki">
            <div class="box">
              <div class="icon"><a :href="Urlproduct + skill.id"><img :src="skill.image_url" class="img-fluid mx-auto d-block"></a></div>
              <h6 class="title">{{ skill.name }}</h6>
              <h6 class="description" v-if="skill.description.length>82">{{ product.description.substring(0, 82) }} ... <a :href="Urlproduct + skill.id">See More</a></h6>
              <h6 class="description" v-else>{{ skill.description }}</h6>
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
      data() {
        return {
         Urlproduct: localStorage['URLroot'] + '/product/view/',
         GetSki: '',
         UrlUser: localStorage['URLroot'] + '/user/show/',
       }
    },
    props: [],
    mounted() {
      axios.get(localStorage['URLroot'] + '/topfourSki').then(response => (this.GetSki = response.data));
    }
    }
</script>