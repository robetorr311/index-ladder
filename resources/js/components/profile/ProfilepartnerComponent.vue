<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Partner Profile </h5></div>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col">
          <div class="card">
            <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Rating Section</h5></div>
            <div class="card-body"> 
              <pratingproducts-component :user-value="UserValue"></pratingproducts-component>
              <pratingskills-component :user-value="UserValue"></pratingskills-component>
              <pratingservices-component :user-value="UserValue"></pratingservices-component>
            </div> 
          </div>
        </div>
      </div>
      <div class="row justify-content-center" v-for="comment in MyComments">
        <div class="col">
          <div class="card">
            <div class="card-header"><i class="fas fa-comment"></i> Comments</div>
              <div class="card-body card-comments">
                <p class="card-text">User: {{  comment.name }}</p>
                <p class="card-text">Comment: {{ comment.comment }} </p>
              </div>
              <div class="card-footer card-fcomments">
                <p class="card-stars">
                <span v-if="parseInt(comment.qualify)===1">
                  <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===2">
                  <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===3">
                  <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===4">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===5">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===6">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===7">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===8">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===9">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </span>
                <span v-else-if="parseInt(comment.qualify)===10">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </span>
                <span v-else>
                  <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
              </p>
              </div>
            </div>
          </div>
        </div>    
    </div>
  </div>   
</template>

<script>
  import PratingproductsComponent from "../trades/PratingproductsComponent.vue";
  import PratingskillsComponent from "../trades/PratingskillsComponent.vue";
  import PratingservicesComponent from "../trades/PratingservicesComponent.vue";
  export default {
    components: {
      PratingproductsComponent,
      PratingskillsComponent,
      PratingservicesComponent
    },
    data() {
      return {
        MyComments:'',
      };
    },
    props: [
      'UserValue',  
    ],    
    methods: {

    },
    mounted() {
      axios.get(localStorage['URLroot'] + '/MyComments').then(response => (this.MyComments=response.data));
    },
  }
</script>