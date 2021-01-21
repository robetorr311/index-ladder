<template>
  <div class="card" v-else-if="showHostUser">
    <div class="card-header"><div class="row"><div class="col"><p class="text-left"><h5 class="card-title"><i class="fas fa-user-tag"></i> About Partner</h5></p></div><div class="col"><p class="text-right">
    <a :href="HostUserURL">
    <getqualify-component :user-value="UserValue"></getqualify-component>             
    </a></p></div></div></div>
    <div class="card-body">
      <p class="card-text">Name: {{ HostUserName }} </p>
      <p class="card-text">Email: {{ HostUserEmail }} </p>
      <p class="card-text">Phone: {{ HostUserPhone }} </p>
    </div>
  </div>
</template>
<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";;
export default {
  components: {
    GetqualifyComponent,
  },        
  data() {
    return {
      HostUserName:'',
      HostUserEmail:'',
      HostUserPhone:'',
      HostUserURL:'',
    };
  },
  props: [
    'UserValue',  
  ],
  methods: {
    SetPartner(response){
      this.HostUserName=response.name;
      this.HostUserEmail=response.email;
      this.HostUserPhone=response.phone;
      this.HostUserURL=localStorage['URLroot'] + '/user/show/' + UserValue;
    },    
  },
  mounted() {
    axios.get( localStorage['URLroot'] + '/GetTrader/' + this.UserValue).then(response => (this.SetPartner(response.data)));
  },        
}
</script>