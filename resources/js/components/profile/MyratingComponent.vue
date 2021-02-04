<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Rating Section</h5></div>
      <div class="card-body"> 
        <ratingproducts-component></ratingproducts-component>
        <ratingskills-component></ratingskills-component>
        <ratingservices-component></ratingservices-component>
      </div> 
  </div>   
</template>

<script>
  import RatingproductsComponent from "../categories/RatingproductsComponent.vue";
  import RatingskillsComponent from "../categories/RatingskillsComponent.vue";
  import RatingservicesComponent from "../categories/RatingservicesComponent.vue";
  export default {
    components: {
      RatingproductsComponent,
      RatingskillsComponent,
      RatingservicesComponent
    },
    data() {
      return {
      };
    },
    methods: {

    },
    mounted() {

    },
  }
</script>