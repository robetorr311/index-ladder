<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-info-circle"></i> My Profile</h5></div>    
    <div class="card-body">
      <img :src="GetAvatar.image_url"  class="img-fluid mx-auto d-block rounded-circle" width="100px">
      <div class="text-center">
        <h6 class="product-name">{{ GetUserValues.name }}</h6>
        <p class="card-text">{{ GetUserValues.email }}</p>
        <p class="card-text">{{ GetUserValues.phone }}</p>
        <p class="card-text">{{ GetAddress.address }}</p>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data() {
            return {
                GetUserValues:'',
                GetAvatar: '',
                GetAddress: '',
            };
        },
        methods: {

        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.GetUserValues=response.data));
            axios.get(localStorage['URLroot'] + '/profile/GetUserAvatar').then(response => (this.GetAvatar=response.data));
            axios.get(localStorage['URLroot'] + '/profile/GetUserAddress').then(response => (this.GetAddress=response.data));
        },        
    }
</script>