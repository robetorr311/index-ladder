<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-bell"></i> Notifications</h5></div>    
    <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th>Notification</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="item in GetNotifications" >
                        <td>{{ item.message }}</td>
                        <td><span v-if="item.status===0">Unreaded</span><span v-else>Readed</span></td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
    </div>
  </div>
</template>

<script>
    export default {
        data() {
            return {
                GetNotifications:'',
            };
        },
        methods: {

        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/profile/GetNotifications').then(response => (this.GetNotifications=response.data));
        },        
    }
</script>