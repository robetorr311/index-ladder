<template>
	    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-3">
              <div class="row">
                <div class="col">
                  <userinfo-component></userinfo-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <slidefav-component></slidefav-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-star"></i> Score and comments</h5></div>
                    <div class="card-body">
                      <p class="card-text">Info component here....</p>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
            <div class="col"> 
              <tradetable-component></tradetable-component>
            </div>
            <div class="col-md-3">
              <div class="row">
                <div class="col">
                  <getusers-component></getusers-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <favusers-component></favusers-component>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title"><i class="fas fa-users"></i> Your followers</h5></div>
                    <div class="card-body">
                      <p class="card-text">Component here....</p>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
          </div>          
        </div>
      </div>
    </div>
</template>
<script>
    import InfoComponent from "../profile/InfoComponent.vue";
    import SliderfavComponent from "../products/SliderfavComponent.vue";
    import TradetableComponent from "../products/TradetableComponent.vue";
    import GetusersComponent from "../categories/GetusersComponent.vue";
    import FavusersComponent from "../products/FavusersComponent.vue";
    export default {
      components: {
        InfoComponent,
        SliderfavComponent,
        TradetableComponent,
        GetusersComponent,
        FavusersComponent,
      },
      mounted() {
        }
    }
</script>