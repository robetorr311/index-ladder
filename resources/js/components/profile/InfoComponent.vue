<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-info-circle"></i> My Profile</h5></div>    
    <img class="card-img-top" :src="GetAvatar.image_url">  
    <div class="card-body">
      <h4 class="card-title">{{ GetUserValues.name }}</h4>
      <p class="card-text">{{ GetUserValues.email }}</p>
      <p class="card-text">{{ GetUserValues.phone }}</p>
      <p class="card-text">{{ GetAddress.address }}</p>
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
           console.log('Info Component successfully mounted.')
        },        
    }
</script>