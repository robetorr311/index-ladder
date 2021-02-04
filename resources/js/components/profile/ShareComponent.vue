<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-user-cog"></i> Share Section</h5></div>
      <div class="card-body"> 
        <div class="card">
          <div class="card-header"><h5 class="card-title"><i class="fas fa-users-cog"></i> Please Choose what kind of Products, Services or Skills have to exchange in Index Ladder</h5></div>    
            <div class="card-body">
            <div class="row">
              <div class="col-md-4 over">
               <choosepro-component></choosepro-component>
               <chooseskill-component></chooseskill-component>
               <chooseserv-component></chooseserv-component>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div v-if="GetProducts">
                      <span class="badge badge-pill product" v-for="items in GetProducts">
                        {{ items.category }}
                        <span class="badge badge-light"><i class="fas fa-times-circle" @click="deleteitem(items.id)"></i></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div v-if="GetSkills">
                      <span class="badge badge-pill skills" v-for="items in GetSkills">
                        {{ items.category }}
                        <span class="badge badge-light"><i class="fas fa-times-circle" @click="deleteitem(items.id)" ></i></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div v-if="GetServices">
                      <span class="badge badge-pill service" v-for="items in GetServices">
                        {{ items.category }}
                        <span class="badge badge-light"><i class="fas fa-times-circle" @click="deleteitem(items.id)"></i></span>
                      </span>
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
  import ChooseProducts from "../categories/ChooseproductsComponent.vue";
  import ChooseServices from "../categories/ChooseservicesComponent.vue";
  import ChooseSkills from "../categories/ChooseskillsComponent.vue";
  export default {
    components: {
      ChooseProducts,
      ChooseServices,
      ChooseSkills
    },
    data() {
      return {
        GetProducts:'',
        GetServices:'',
        GetSkills:'',  
      };
    },
    methods: {
      deleteitem(id){
        axios.post( localStorage['URLroot'] + '/seeddelete' ,
        {
          csrfToken: myToken.csrfToken,
          id: id
        }
        ).then(response => (this.GetUploaded = response.data));
      },
      startInterval() {
        setInterval(() => {
          var url = localStorage['URLroot'];  
          axios.get(url + '/GetSeedProducts').then(response => (this.GetProducts = response.data));
          axios.get(url + '/GetSeedSkills').then(response => (this.GetSkills = response.data));
          axios.get(url + '/GetSeedServices').then(response => (this.GetServices = response.data));
        }, 2000)
      },
    },
    mounted() {
      this.startInterval();  
    },
  }
</script>