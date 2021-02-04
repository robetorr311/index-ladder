<template>
        <p class="card-stars-m" v-if="qualified"><small>
          <span v-if="resp===1">
          <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===2">
          <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===3">
          <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===6">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===7">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===8">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===9">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
        </span>
        <span v-else-if="resp===10">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span v-else>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        </small></p>
        <p class="card-stars" v-else><small>
          <span v-if="resp===1">
          <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===2">
          <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===3">
          <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===6">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===7">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===8">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="resp===9">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
        </span>
        <span v-else-if="resp===10">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span v-else>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        </small></p>        
</template>
<script>

  export default {
    components: {
      
    },    
    data() {
        return {
         resp:0,
         qualified:false,
       }
    },
    computed: {
    },    
    methods: {
      GetQualifyTrade(response){
        let c=parseInt(response);
        let user_id =parseInt(this.UserValue);
        let trade_id =parseInt(this.TradeValue);        
        if(c>0){
          this.qualified=true;
          axios.get( localStorage['URLroot'] + '/GetQualifyTrade/' + user_id + '/' + trade_id).then(response => ( this.SetResp(response.data)));
        } 
        else{
          this.qualified=false;
          axios.get( localStorage['URLroot'] + '/GetQualify/' + user_id).then(response => ( this.SetResp(response.data)));
        }
      },
      SetResp(response){
        this.resp=parseInt(response);
      },
    },
    props: [ 'UserValue' , 'TradeValue' ],
    mounted() {
      axios.get( localStorage['URLroot'] + '/GetQualifyStatus/' + this.UserValue + '/' + this.TradeValue).then(response => ( this.GetQualifyTrade(response.data)));
    }
  }
</script>