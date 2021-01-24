<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Example Component</h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="imagesTable" class="table table-hover">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Product</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValues">
                <td><img :src="item.image_url" width="100px"></td>
                <td>{{ item.name }}</td>
                <td>{{ item.product_id }}</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Product</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
</template>

<script>

import jquery from "jquery";
import moment from "moment";
import datatables from 'datatables.net';
export default {
  components: {
    jquery,
    moment,
    datatables
  },        
  data() {
    return {
      GetValues:[],
    };
  },
  props: [
  ],
  methods: {
    SetTable(response){
      this.GetValues=response;
      this.initDtt();
    },
    initDtt() {
      this.$nextTick(function () {
        $("#imagesTable").DataTable({
          "columns": [
            { "data": "image_url" },
            { "data": "name" },
            { "data": "product_id" }
          ]
        }).draw();

   });
      //});
    }
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetImages').then(response => (this.SetTable(response.data)));
  },        
}
</script>