<template>
    <div class="card">
            <div class="card-header"><div class="row"><div class="col"><p class="text-left"><h5 class="card-title"><i class="fas fa-user-tag"></i> About Partner</h5></p></div>
            <div class="col">
              <p class="text-right">
              <a :href="PartnerURL"><getqualify-component :user-value="UserValue"></getqualify-component></a>
              </p></div></div></div>
            <div class="card-body">
                <p class="card-text">Name: {{ PartnerName }} </p>
                <p class="card-text">Email: {{ PartnerEmail }} </p>
                <p class="card-text">Phone: {{ PartnerPhone }} </p>
            </div>
            <messages-component :product-value="ProductValue" :proposal-value="ProposalValue"></messages-component>
            </div>
</template>
<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
import MessageComponent from "./MessageComponent.vue";
export default {
  components: {
    GetqualifyComponent,
    MessageComponent,
  },        
  data() {
    return {
      PartnerName:'',
      PartnerEmail:'',
      PartnerPhone:'',
      PartnerURL:'',      
    };
  },
  props: [
    'ProductValue',
    'ProposalValue',
    'UserValue',
  ],
  methods: {
    SetPartner(response){
      this.PartnerName=response.name;
      this.PartnerEmail=response.email;
      this.PartnerPhone=response.phone;
      this.PartnerURL=localStorage['URLroot'] + '/user/show/' + this.UserValue;
    },
  },
  mounted() {
    axios.get( localStorage['URLroot'] + '/GetTrader/' + this.UserValue).then(response => (this.SetPartner(response.data)));
  },        
}  
</script>