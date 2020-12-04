<template>
<div id="catalog" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#catalog" data-slide-to="0" class="active"></li>
    <li data-target="#catalog" data-slide-to="1"></li>
    <li data-target="#catalog" data-slide-to="2"></li>
    <li data-target="#catalog" data-slide-to="3"></li>
    <li data-target="#catalog" data-slide-to="4"></li>
    <li data-target="#catalog" data-slide-to="5"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img :src="this.slide1" width="100%">
    </div>
    <div class="carousel-item" >
      <img :src="this.slide2" width="100%">
    </div>
    <div class="carousel-item">
      <img :src="this.slide3" width="100%">
    </div>
    <div class="carousel-item">
      <img :src="this.slide4" width="100%">
    </div>
    <div class="carousel-item">
      <img :src="this.slide5" width="100%">
    </div>
    <div class="carousel-item">
      <img :src="this.slide6" width="100%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#catalog" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#catalog" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</template>

<script>
  export default {
    data() {
      return {
        slide1:'',
        slide2:'',
        slide3:'',
        slide4:'',
        slide5:'',
        slide6:''
      }
    },
    mounted() {
            this.slide1= localStorage['URLroot'] + '/images/slide-image1.jpg';
            this.slide2= localStorage['URLroot'] + '/images/slide-image2.jpg';
            this.slide3= localStorage['URLroot'] + '/images/slide-image3.jpg';
            this.slide4= localStorage['URLroot'] + '/images/slide-image4.jpg'; 
            this.slide5= localStorage['URLroot'] + '/images/slide-image5.jpg';
            this.slide6= localStorage['URLroot'] + '/images/slide-image6.jpg';
        }    
  }
</script>