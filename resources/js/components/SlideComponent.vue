<template>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <carousel :data="data1" direction="right"></carousel> 
        </div>     
      </div>
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
        slide6:'',
        data1:[]
      }
    },
    mounted() {
            var value = localStorage['URLroot'];
            this.slide1= value + '/images/slide-image1.jpg';
            this.slide2= value + '/images/slide-image2.jpg';
            this.slide3= value + '/images/slide-image3.jpg';
            this.slide4= value + '/images/slide-image4.jpg'; 
            this.slide5= value + '/images/slide-image5.jpg';
            this.slide6= value + '/images/slide-image6.jpg';
            this.data1=['<div class="example-slide"><img src="'+ this.slide1 + '" class="img-fluid mx-auto d-block" /></div>',
          '<div class="example-slide"><img src="'+ this.slide2 + '" class="img-fluid mx-auto d-block" /></div>',
          '<div class="example-slide"><img src="'+ this.slide3 + '" class="img-fluid mx-auto d-block" /></div>','<div class="example-slide"><img src="'+ this.slide4 + '" class="img-fluid mx-auto d-block" /></div>',
          '<div class="example-slide"><img src="'+ this.slide5 + '"class="img-fluid mx-auto d-block" /></div>',
          '<div class="example-slide"><img src="'+ this.slide6 + '" class="img-fluid mx-auto d-block" /></div>'];
        }    
  }
</script>