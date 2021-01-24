<template>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All trades published in Index Ladder </h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="AllTable" class="table table-hover">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>User</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValues">
                <td><a :href="Urlproduct + item.id"><img :src="item.image_url" width="100px"></a></td>
                <td> {{ item.name }} </td>
                <td> {{ item.type_product }} </td>
                <td> {{ item.category }} </td>
                <td> {{ item.user_email }} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>User</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
</template>

<script>
import GetqualifyComponent from "./GetqualifyComponent.vue";
import jquery from "jquery";
import moment from "moment";
import datatables from 'datatables.net';
import datatablesnetscroller from 'datatables.net-scroller';
export default {
  components: {
    GetqualifyComponent,    
    jquery,
    moment,
    datatables,
    datatablesnetscroller,
  },        
  data() {
    return {
      GetValues:[],
      Urlproduct: localStorage['URLroot'] + '/product/view/',
    };
  },
  props: [
    'ProductValue'
  ],
  methods: {
    SetTable(response){
      this.GetValues=response;
      this.initDtt();
    },
    initDtt() {
      this.$nextTick(function () {
        $("#AllTable").DataTable({
          "scrollY":        "500px",
          "scrollCollapse": true,          
          "columns": [
            { "data": "image_url" },
            { "data": "name" },
            { "data": "type_product" },
            { "data": "category" },
            { "data": "user_email" },
          ]
        }).draw();
      });
    }    
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetTradesPublished').then(response => (this.SetTable(response.data)));
  },        
}
</script>
