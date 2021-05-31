<template>
    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 welcome_back">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mr-2">
                                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Welcome Back {{ Getuser.name }}</div><br>                                            
                                          <span class="welcome_back_text">
                                            <p>{{ GetUserValues.email }}</p>
                                            <p>{{ GetUserValues.phone }}</p>
                                          </span>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-info fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Earnings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$ {{ earn }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pending Orders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ pendingorders }} {{ percent }}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2"  v-if="p===1">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===3">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===4">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===5">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===6">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===7">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===8">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===9">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else-if="p===10">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm mr-2"  v-else>
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 10%" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Trades</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ totaltrades }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>

</template>
<script>
  export default {
      data() {
        return {
          Getuser: '',
          HaveAvatar: '',
          Notifications: '',
          MyMessages:'',
          CountMyMess:'',          
          profileUrl : localStorage['URLroot'] + '/profile',
          GetUserValues:'',  
          URLImagelogo : localStorage['URLroot'] + '/images/LogoRound.svg',
          earn: 0,
          pendingorders:0,
          totaltrades:0,
          percent:0,
          p:0,
        }
      },
      props: [],
      methods: {
        earnings(response){
          this.earn=parseInt(response);
        },
        pending(response){
          this.pendingorders=parseInt(response);
          axios.get( localStorage['URLroot'] + '/totaltrades').then(response => (this.total(response.data)));
        },
        total(response){
          this.totaltrades=parseInt(response);
          this.percent=(this.pendingorders*100)/this.totaltrades;
          if (isNaN(this.percent)) {
            this.percent=0;
          }
          switch (true) {
            case (this.percent < 10):
              this.p=1;
              break;
            case (this.percent >= 10 && this.percent < 20):
              this.p=2;
              break;
            case (this.percent >= 20 && this.percent < 30):
              this.p=3;
              break;
            case (this.percent >= 30 && this.percent < 40):
              this.p=4;
              break;
            case (this.percent >= 40 && this.percent < 50):
              this.p=5;
              break;
            case (this.percent >= 50 && this.percent < 60):
              this.p=6;
              break;
            case (this.percent >= 60 && this.percent < 70):
              this.p=7;
              break;
            case (this.percent >= 70 && this.percent < 80):
              this.p=8;
              break;
            case (this.percent >= 80 && this.percent < 100):
              this.p=9;
              break;
            case (this.percent === 100):
              this.p=10;
              break;
            default:
              this.p=0;
              break;
            }
        },        
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.GetUserValues=response.data));
        axios.get( localStorage['URLroot'] + '/getUserName').then(response => (this.Getuser = response.data));
        axios.get( localStorage['URLroot'] + '/earnings').then(response => (this.earnings(response.data)));
        axios.get( localStorage['URLroot'] + '/pendingorders').then(response => (this.pending(response.data)));
      }
  }
</script>