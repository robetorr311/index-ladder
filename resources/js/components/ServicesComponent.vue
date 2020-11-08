<template>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <h2> Last Services</h2>
        </div>
      </div>      
      <div class="row align-items-center">
        <div class="col-lg-3"  v-for="service in services">
          <div class="p-5">      
            <div class="card">
              <a :href="Urlproduct + service.id"><img :src="service.image_url" class="img-fluid mx-auto d-block"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a :href="Urlproduct + service.id">{{ service.name }}</a>
                </h4>
                <h5>$ {{ service.amount }}</h5>
                <p class="card-text">{{ service.description }}</p>
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
         services: JSON.parse(this.ServicesValues),
         Urlproduct: localStorage['URLroot'] + '/product/'
       }
    },
    props: [ 'ServicesValues' ],
    mounted() {      
        }
    }
</script>
