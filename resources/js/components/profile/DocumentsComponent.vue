<template>
                  <div class="card">
                  <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Documents Section</h5></div>
                    <div class="card-body">
                      <form>
                      <div class="row justify-content-center">
                          <div class="col">
                              <picture-component></picture-component>
                          </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col">
                              <card-component></card-component>
                        </div>                        
                      </div>                                           
                      <div class="row justify-content-center">
                          <div class="col">
                              <license-component></license-component>
                          </div>
                      </div>
                    </form>
                    </div>
                </div>	
</template>
<script>
import PictureComponent from "../PictureComponent.vue";
import CardComponent from "../CardComponent.vue";
import LicenseComponent from "../LicenseComponent.vue";
export default {
  components: {
    PictureComponent,
    CardComponent,
    LicenseComponent,
  },
  data() {
    return {
      picture_id: '',
      card_id: '',
      license_id: '',
      comments: '',
      values: '',
      disabled: true,
      disabledEmail: true,
      showedit: true,
      showsave: false,
      hasImage: false,
      image: null,
      idregister:'',
      UrlAva: '',
      }
    },
    props: [ ],
    methods: {
    },
    mounted() {

    }     
}	
</script>