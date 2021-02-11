<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All trades published in Index Ladder </h5></div>
      <div class="card-body">
      <div id="alltrades">
      <div class="row">
          <div class="col" v-for="item in GetValues">
            <div class="box">
              <div class="icon"><a :href="Urlproduct + item.id"><img :src="item.image_url" class="img-fluid mx-auto d-block"></a></div>
              <h6 class="title">{{ item.name }}</h6>
              <h6 class="description">{{ item.description }}</h6>
            </div>
          </div>
      </div>
      </div>
      </div>
      <div class="card-footer"></div>
    </div>
</template>

<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
export default {
  components: {
  GetqualifyComponent,    
  },        
  data() {
    return {
      GetValues:[],
      Urlproduct: localStorage['URLroot'] + '/product/view/',
    };
  },
  props: [
    'ProductValue'
  ],
  methods: {
    SetTable(response){
      this.GetValues=response;
    },
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetTradesPublished').then(response => (this.SetTable(response.data)));
  },        
}
</script>
