<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Example Component</h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <datatable :data="GetValues" :columns="columns" ></datatable>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
</template>

<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
require("bootstrap-vue-datatable");
import moment from "moment";
export default {
  components: {
    moment,
    GetqualifyComponent,
  },        
  data() {
    return {
      GetValues:[],
      columns: [
        {name: "image_url", th: "Image", render (row, cell, index) {
            let str='<img src="' + row.image_url + '" width="100px">';
            return str; }},
        {name: "name", th: "Name"},
        {name: "type_product", th: "Type"},        
        {name: "category", th: "Product"},
        {name: "user_email", th: "User Email"},
        {name: "user_id", th: "User", render(row, cell, index){
            return '<a type="button" class="btn btn-secondary" href="'+ localStorage['URLroot'] + '/product/view/' + row.id + '"> Show </a>';
        }},
        ],
    };
  },
  props: [
    'ProductValue'
  ],
  methods: {
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetByCategory/' + this.ProductValue).then(response => (this.GetValues=response.data));
  },        
}

</script>
