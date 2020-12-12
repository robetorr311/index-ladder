<template>
	    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid" width="400px" :src="UrlRoot +'/images/trade-1311577_1920.jpg'"> 
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="title-landing light_background border_landing_trade">
            <div class="container landing_trade_text">
              <p>TRADE</p>
              <p class="title_landing_i">A mutually agreed upon exchange of tangible or non-tangible goods and services</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <img class="img-fluid" width="400px" :src="UrlRoot + '/images/currency-1680786_1280.png'">
          </div>
        </div>
        <div class="col-lg-6 order-lg-2">
          <div class="title-landing title_landing_i light_background border_landing_money">
            <div class="container landing_money_text">
            <p>MONEY</p>
            <ul>
              <li> Storage of Value </li>
              <li> Measure of Value </li>
              <li> Medium of Exchange (of the Value) </li>
            </ul>
            </div>
          </div>
        </div>
      </div>      
    </div>
</template>
<script>
export default {
  data() {
    return {
      UrlRoot: localStorage['URLroot']
    }
  },
  mounted() {
  }
}
</script>