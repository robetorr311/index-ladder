<template>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <h2> Last Skills</h2>
        </div>
      </div>      
      <div class="row align-items-center">
        <div class="col-lg-3"  v-for="skill in GetSki">
          <div class="p-5">      
            <div class="card">
              <a :href="Urlproduct + skill.id"><img :src="skill.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a :href="Urlproduct + skill.id">{{ skill.name }}</a>
                </h4>
                <h5>$ {{ skill.amount }}</h5>
                <p class="card-text" v-if="skill.description.length>82">{{ skill.description.substring(0, 82) }} ... <a :href="Urlproduct + skill.id">See More</a></p>
                <p class="card-text" v-else>{{ skill.description }}</p>
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
         Urlproduct: localStorage['URLroot'] + '/product/',
         GetSki: ''
       }
    },
    props: [],
    mounted() {
      axios.get(localStorage['URLroot'] + '/topfourSki').then(response => (this.GetSki = response.data));
    }
    }
</script>