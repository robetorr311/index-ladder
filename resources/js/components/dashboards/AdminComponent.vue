<template>
    <div class="container-fluid">
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All registrations in Index Ladder </h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="Table1" class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValuesTable1">
                <td>{{ item.firstname }}</td>
                <td> {{ item.lastname }} </td>
                <td> {{ item.phone }} </td>
                <td> {{ item.email }} </td>
                <td> {{ item.address }} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All users active in Index Ladder </h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="Table2" class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValuesTable2">
                <td> {{ item.name }} </td>
                <td> {{ item.phone }} </td>
                <td> {{ item.email }} </td>
                <td> {{ item.address }} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All contact messages in Index Ladder </h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="Table3" class="table table-hover">
            <thead>
              <tr>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValuesTable3">
                <td> {{ item.email }} </td>
                <td> {{ item.message }} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> All trades in Index Ladder </h5></div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="Table4" class="table table-hover">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in GetValuesTable4">
                <td><img :src="item.image_url" width="100px"></td>
                <td> {{ item.name }} </td>
                <td> {{ item.type_product }} </td>
                <td> {{ item.category }} </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="card-footer"></div>
    </div>  
    </div>           
</template>

<script>
import jquery from "jquery";
import moment from "moment";
import datatables from 'datatables.net';
import datatablesnetscroller from 'datatables.net-scroller';
export default {
  components: {
    jquery,
    moment,
    datatables,
    datatablesnetscroller,
  },        
  data() {
    return {
      GetValuesTable1:[],
      GetValuesTable2:[],
      GetValuesTable3:[],
      GetValuesTable4:[],
    };
  },
  methods: {
    SetTable1(response){
      this.GetValuesTable1=response;
      this.initDtt1();
    },
    SetTable2(response){
      this.GetValuesTable2=response;
      this.initDtt2();
    },
    SetTable3(response){
      this.GetValuesTable3=response;
      this.initDtt3();
    },
     SetTable4(response){
      this.GetValuesTable4=response;
      this.initDtt4();
    },           
    initDtt1() {
      this.$nextTick(function () {
        $("#Table1").DataTable({
          "scrollY":        "500px",
          "scrollCollapse": true,          
          "columns": [
            { "data": "firstname" },
            { "data": "lastname" },
            { "data": "phone" },
            { "data": "email" },
            { "data": "address" },
          ]
        }).draw();
      });
    },
    initDtt2() {
      this.$nextTick(function () {
        $("#Table2").DataTable({
          "scrollY":        "500px",
          "scrollCollapse": true,          
          "columns": [
            { "data": "name" },
            { "data": "phone" },
            { "data": "email" },
            { "data": "address" },
          ]
        }).draw();
      });
    },
    initDtt3() {
      this.$nextTick(function () {
        $("#Table3").DataTable({
          "scrollY":        "500px",
          "scrollCollapse": true,          
          "columns": [
            { "data": "email" },
            { "data": "message" },
          ]
        }).draw();
      });
    },
    initDtt4() {
      this.$nextTick(function () {
        $("#Table4").DataTable({
          "scrollY":        "500px",
          "scrollCollapse": true,          
          "columns": [
            { "data": "image_url" },
            { "data": "name" },
            { "data": "type_product" },
            { "data": "category" },
          ]
        }).draw();
      });
    },                    
  },
  mounted() {
    axios.get(localStorage['URLroot'] + '/GetRegistrations').then(response => (this.SetTable1(response.data)));
    axios.get(localStorage['URLroot'] + '/GetAllUsers').then(response => (this.SetTable2(response.data)));
    axios.get(localStorage['URLroot'] + '/GetAllContacts').then(response => (this.SetTable3(response.data)));
    axios.get(localStorage['URLroot'] + '/GetFullTrades').then(response => (this.SetTable4(response.data)));
  },
}
</script>