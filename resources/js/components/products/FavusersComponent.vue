<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-users"></i> Traders that match with your favorites</h5></div>
    <div class="card-body">
      <div class="row">
        <div class="col" v-for="users in GetValues">
            <div class="card">
              <a :href="Urlprofile + users.id"><img :src="users.image_url" class="img-fluid mx-auto d-block rounded-circle" width="50px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  {{ users.username }}
                </h4>
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
                GetValues:'',
                Urlprofile:'',
            };
        },
        methods: {

        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/GetUsersFavorites').then(response => (this.GetValues=response.data));
        },        
    }
</script>