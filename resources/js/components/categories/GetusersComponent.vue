<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-users"></i> Traders that match with your categories</h5></div>
    <div class="card-body">
      <div id="getusers">
      <div class="row">
          <div class="col-lg-4"  v-for="users in GetValues">
            <div class="box">
              <div class="icon"><a :href="UrlUser + users.id"><img :src="users.image_url" class="img-fluid mx-auto d-block rounded-circle" width="50px"></a></div>
              <h4 class="title"><a :href="UrlUser + users.id">{{ users.name }}</a></h4>
            </div>
          </div>        
      </div>
      </div>
    </div>
    <div class="card-footer" v-if="count > 9">
      <a type="button" :href="UrlMatch" target="blank" class="btn btn-secondary"><i class="fas fa-address-card"></i> Show more</a>
    </div>     
  </div>
</template>

<script>
    export default {
        data() {
            return {
                GetValues:'',
                UrlUser: localStorage['URLroot'] + '/user/show/',
                UrlMatch: localStorage['URLroot'] + '/categories/matchusers',
                count:'',
            };
        },
        methods: {
          SetValues(response){
            var c=0;
            this.GetValues=response;
            $.each(response, function(key, value) {
              c=c+1;
            });
            this.count=c;
          },
        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/GetUsersCategory').then(response => (this.SetValues(response.data)));
        },        
    }
</script>