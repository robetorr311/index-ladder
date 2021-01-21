<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Example Component</h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <datatable :data="GetValues" :columns="columns" :actions="[]"></datatable>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
</template>

<script>
require("bootstrap-vue-datatable");
import moment from "moment";
export default {
  components: {
    moment
  },        
  data() {
    return {
      GetValues:[],
      columns: [
        {name: "image_url", th: "Image", render (row, cell, index) {
            let str='<img src="' + row.image_url + '" width="100px">';
            return str; }},
        {name: "name", th: "Name"},
        {name: "product_id", th: "Product"}],
      actions: [
          {text: "Delete", color: "danger", action: (row, index) => {
            alert('about to delete ${row.name} ${row.product_id}');
          }}],      
    };
  },
  props: [
  ],
  methods: {
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetImages').then(response => (this.GetValues=response.data));
  },        
}
</script>