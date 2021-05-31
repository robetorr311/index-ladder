<template>
  <section class="help_section">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-10">        
        <div class="card commodities_item">
          <div class="row justify-content-md-center">
          <div class="col-lg-4">        
            <div class="card help_box" @click="ShowS">
              <p class="text-center"><i class="fas fa-cog"></i></p>
              <p class="text-center"> Settings</p>
            </div>
          </div> 
          <div class="col-lg-4">        
            <div class="card help_box" @click="ShowT">
              <p class="text-center"> <i class="fas fa-handshake"></i></p>
              <p class="text-center"> Trades </p>
            </div>
          </div> 
          </div>
        </div>
      </div>  
    </div>       
  </div>
  <div id="trades" class="container" v-if="ShowTrades">
    <helptrades-component></helptrades-component>
  </div>
  <div id="settings" class="container" v-if="ShowSettings">
    <helpsettings-component></helpsettings-component>
  </div>  
  </section>
</template>

<script>
  import HelpTradesComponent from "./HelpTradesComponent.vue";
  import HelpsettingsComponent from "./HelpsettingsComponent.vue";
    export default {
      components: {
        HelpTradesComponent,
        HelpsettingsComponent,
      },      
  data() {
    return {
        ShowTrades: false,
        ShowSettings: false,
      }
    },
    methods: {
    ShowT(){
      this.ShowTrades=true;
    },
    ShowS(){
      this.ShowSettings=true;
    },
    },     
    mounted() {
        }
    }
</script>