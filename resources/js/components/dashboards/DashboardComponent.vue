<template>
  <div>
  <div v-if="Getuser.logg>0" class="masthead_white text-center text-darkgray">
    <div class="masthead-content_bgwhite">
      <div class="container-fluid">
        <h1 class="masthead-heading masthead-padding mb-0"> {{ title }}</h1>
        <h2 class="masthead-subheading mb-0"></h2>
      </div>
    </div>
    <hr class="sidebar-divider"> 
  </div>
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
           <!-- Sidebar - -->
      <span class="sidebar-brand d-flex align-items-center justify-content-center">
          <div class="sidebar-brand-icon rotate-n-15">
              <!--<img :src="URLImagelogo" class="topbar-logo">-->
          </div>
          <!--<<div class="sidebar-brand-text mx-3">Index Ladder Profile Dashboard</div>-->
      </span>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" :href="dashboardUrl">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
          Profile
      </div>
      <!-- Nav Item - Pages Collapse Menu  -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Settings</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom Components:</h6>
                  <a class="collapse-item" :href="profileUrl">Edit</a>
                  <a class="collapse-item" :href="documentsURL">Documents</a>
                  <a class="collapse-item" :href="ratingsURL">Ratings</a>
              </div>
          </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>To Exchange</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom</h6>
                  <a class="collapse-item" :href="chooseURL">Skills, Services, Products</a>
              </div>
          </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrades"
              aria-expanded="true" aria-controls="collapseTrades">
              <i class="far fa-handshake fa-fw"></i>
              <span>Trades</span>
          </a>
          <div id="collapseTrades" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom</h6>
                <a class="collapse-item" :href="newitemUrl"> Publish a Trade</a>
                <a class="collapse-item" :href="mytradesUrl"> My Trades</a>
                <a class="collapse-item" :href="tradesallURL"> Show all Trades</a>
              </div>
          </div>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
              aria-expanded="true" aria-controls="collapseUsers">
              <i class="fas fa-user-friends fa-fw"></i>
              <span>Users</span>
          </a>
          <div id="collapseUsers" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom</h6>
                <a class="collapse-item" :href="partnersUrl"> Partners</a>
                <a class="collapse-item" :href="matchUrl"> Match Categories</a>
              </div>
          </div>
      </li>                   
      <!-- Sidebar Message 
      <div class="sidebar-card">
          <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
          <p class="text-center mb-2"> components, and more!</p>
          
      </div>-->
  </ul>
  <!-- End of Sidebar -->
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
              </button>
              <!-- Topbar Search -->
              <!--<form
                  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                      <input type="text" v-model="findbyname" class="form-control bg-light border-0 small" placeholder="Search for..."
                          aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                          <button class="btn btn-primary"  @click="FindByName" type="button">
                              <i class="fas fa-search fa-sm"></i>
                          </button>
                      </div>
                  </div>
              </form>-->
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                      <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-search fa-fw"></i>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                          aria-labelledby="searchDropdown">
                          <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                  <input type="text" class="form-control bg-light border-0 small"
                                      placeholder="Search for..." aria-label="Search"
                                      aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                      <button class="btn btn-primary" type="button">
                                          <i class="fas fa-search fa-sm"></i>
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </li>
                  <!-- Nav Item - Alerts -->
                  <li  class="nav-item dropdown no-arrow mx-1" v-if="Notifications.length">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell  fa-fw"></i><sup><span class="have-notificatons"><i class="fas fa-circle fa-sm"></i></span></sup>
                    </a>
                    <div class="dropdown-menu">
                      <span v-for="note in Notifications">
                        <a class="dropdown-item" :href="Urlproduct + note.product_id "><i class="fas fa-bell"></i> {{ note.message }}</a>
                     </span>
                    </div>
                  </li>
                  <li class="nav-item" v-else>
                     <span class="nav-link"><i class="fas fa-bell"></i></span>
                  </li>
                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1" v-if="MyMessages.length">
                      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-envelope fa-fw"></i>
                          <!-- Counter - Messages -->
                          <span class="badge badge-danger badge-counter">{{ CountMyMess }}</span>
                      </a>
                      <!-- Dropdown - Messages -->
                      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                          aria-labelledby="messagesDropdown">
                          <h6 class="dropdown-header">
                              Message Center
                          </h6>
                          <a class="dropdown-item d-flex align-items-center" href="#" v-for="message in  MyMessages">
                              <div class="dropdown-list-image mr-3">
                                  <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                      alt="">
                                  <div class="status-indicator bg-success"></div>
                              </div>
                              <div class="font-weight-bold">
                                  <div class="text-truncate">{{ message.message }}</div>
                              </div>
                          </a>
                      </div>
                  </li>
                  <li class="nav-item" v-else>
                     <span class="nav-link"><i class="fas fa-envelope fa-fw"></i></span>
                  </li>
                  <div class="topbar-divider d-none d-sm-block"></div>
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Getuser.name }}</span>
                        <span v-if="HaveAvatar.URLAvatar==='none'"></span>
                        <span v-else class="dropdown-item"><img :src="HaveAvatar.URLAvatar" class="rounded-circle" width="30px" height="30px"></span>                                
                      </a>
                      <!-- Dropdown - User Information -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                          aria-labelledby="userDropdown">
                          <a class="dropdown-item" :href="dashboardUrl">
                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                              Profile
                          </a>
                          <a class="dropdown-item" :href="profileUrl">
                              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                              Settings
                          </a>
                      </div>
                  </li>
              </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
              <!-- Page Heading -->
              <!-- Content Row -->
        <div v-if="CenterContent===0">
          <profiledashboard-component></profiledashboard-component>
          <tradeseed-component :trade-values="TradeValues"></tradeseed-component>
        </div>
        <div v-else-if="CenterContent===1">
          <profile-component></profile-component>
        </div>
        <div v-else-if="CenterContent===2">
          <publishtrade-component></publishtrade-component>
        </div>
        <div v-else-if="CenterContent===3">
          <trade-component :product-value="ProductID"></trade-component>
        </div>
        <div v-else-if="CenterContent===4">
          <editproduct-component :product-value="ProductID"></editproduct-component>
        </div>
        <div v-else-if="CenterContent===5">
          <profiletrader-component :trader-value="TraderID"></profiletrader-component>
        </div>
        <div v-else-if="CenterContent===6">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===7">
          <tradesall-component></tradesall-component>
        </div>
        <div v-else-if="CenterContent===8">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===9">
          <favorites-component :trade-values="TradeValues"></favorites-component>
        </div>
        <div v-else-if="CenterContent===10">
          <notifications-component ></notifications-component>
        </div>              
        <div v-else-if="CenterContent===11">
          <getusers-component></getusers-component>
        </div>
        <div v-else-if="CenterContent===12">
          <documents-component></documents-component> 
        </div>
        <div v-else-if="CenterContent===13">
          <profileshare-component></profileshare-component> 
        </div>              
        <div v-else-if="CenterContent===14">
          <myrating-component></myrating-component>
        </div>
        <div v-else-if="CenterContent===15">
          <tradetable-component></tradetable-component>
        </div>
        <div v-else-if="CenterContent===16">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===17">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===18">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===19">
          <tradesall-component :trade-values="TradeValues"></tradesall-component>
        </div>
        <div v-else-if="CenterContent===20">
          <partner-component></partner-component>
        </div>
        <div v-else-if="CenterContent===21">
          <getusers-component></getusers-component>
        </div>
        <div v-else>
          <profiledashboard-component></profiledashboard-component>
          <tradeseed-component :trade-values="TradeValues"></tradeseed-component>         
        </div>
          </div>
          <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content tradeseed-component-->
  </div>
</div>
  </div> 
</template>
<script>
  import InfoComponent from "../profile/InfoComponent.vue";
  import SliderfavComponent from "../products/SliderfavComponent.vue";
  import TradetableComponent from "../trades/TradetableComponent.vue";
  import GetusersComponent from "../categories/GetusersComponent.vue";
  import FavusersComponent from "../products/FavusersComponent.vue";
  import ProfileComponent from "../profile/ProfileComponent.vue";
  import ProductComponent from "../products/ProductComponent.vue";
  import AddNewProductComponent from "../products/AddNewProductComponent.vue";
  import EditProductComponent from "../products/EditProductComponent.vue";
  import SalesComponent from "../products/SalesComponent.vue";
  import TraderprofileComponent from "../trades/TraderprofileComponent.vue";
  import FavoritesComponent from "../products/FavoritesComponent.vue";
  import InprogressComponent from "../trades/InprogressComponent.vue";
  import CompletedComponent from "../trades/CompletedComponent.vue";
  import CancelledComponent from "../trades/CancelledComponent.vue";
  import AlltradesComponent from "../trades/AlltradesComponent.vue";
  import TradesseedComponent from "../trades/TradesseedComponent.vue";
  import ProfiledashboardComponent from "../profile/ProfiledashboardComponent.vue";  
  import ShareComponent from "../profile/ShareComponent.vue";
  import MyratingComponent from "../profile/MyratingComponent.vue";
  import DocumentsComponent from "../profile/DocumentsComponent.vue";
  import PartnersComponent from "../products/PartnersComponent.vue";
  export default {
      components: {
        InfoComponent,
        SliderfavComponent,
        TradetableComponent,
        GetusersComponent,
        FavusersComponent,    
        ProfileComponent,
        ProductComponent,
        AddNewProductComponent,
        EditProductComponent,
        SalesComponent,
        TraderprofileComponent,
        FavoritesComponent,
        InprogressComponent,
        CancelledComponent,
        CompletedComponent,
        AlltradesComponent,
        ProfiledashboardComponent,
        ShareComponent,
        MyratingComponent,
        DocumentsComponent,
        TradesseedComponent,
        PartnersComponent,
      },
      data() {
        return {
          CenterContent: 0,
          ProductID:'',
          ShowAdmintables: false,
          Getuser: '',
          HaveAvatar: '',
          Notifications: '',
          MyMessages:'',
          CountMyMess:'',
          title: 'User Profile Dashboard',          
          profileUrl : localStorage['URLroot'] + '/profile',
          GetUserValues:'',  
          URLImagelogo : localStorage['URLroot'] + '/images/LogoRound.svg',
          newitemUrl: localStorage['URLroot']+ '/product/addnew',
          documentsURL: localStorage['URLroot']+ '/documents',
          chooseURL: localStorage['URLroot']+ '/choose',
          ratingsURL: localStorage['URLroot']+ '/ratings',
          dashboardUrl: localStorage['URLroot']+ '/dashboard',
          mytradesUrl: localStorage['URLroot']+ '/mytrades',
          tradesallURL: localStorage['URLroot'] + '/trades/all',
          partnersUrl: localStorage['URLroot'] + '/partnersusers',
          matchUrl: localStorage['URLroot'] + '/matchusers',
          usersallURL: localStorage['URLroot'] + '/allusers',
          findbyname:'',           
        }
      },
      props: [ 
        'RoutesValues',
        'TradeValues'
      ],
      methods: {
        ShowCenterContent(response){
          this.GetUserValues=response;
          let userid=parseInt(response.id);
          if(userid==1){
            this.ShowAdmintables=true;
          }
          let route=this.RoutesValues;
          let dashboard= localStorage['URLroot'] + '/dashboard';
          let profile= localStorage['URLroot'] + '/profile';
          let documents= localStorage['URLroot'] + '/documents';
          let choose= localStorage['URLroot'] + '/choose';
          let ratings= localStorage['URLroot'] + '/ratings';
          let mytrades= localStorage['URLroot'] + '/mytrades';          
          let addnew= localStorage['URLroot'] + '/product/addnew';
          let notifications=localStorage['URLroot'] + '/notifications';
          let completed = localStorage['URLroot'] + '/completed';
          let users=localStorage['URLroot'] + '/users';        
          let product= route.search("/product/view/");     
          let edit = route.search("/product/edit");
          let myskills= route.search('/myskills');
          let myservices= route.search('/myservices');
          let mygoods= route.search('/mygoods');
          let trader=route.search("/user/show/");
          let alltra=route.search("/trades/all/");
          let findby=route.search("/product/findbycategory");
          let findbyn=route.search("/product/findbyname/");
          let routepro=localStorage['URLroot'] + '/product/view';
          let routeedit=localStorage['URLroot'] + '/product/edit';
          let routetrad=localStorage['URLroot'] + '/user/show';
          let routeallt=localStorage['URLroot'] + '/trades/all';
          let routefindbyc=localStorage['URLroot'] + '/product/findbycategory';
          let routefindbyn=localStorage['URLroot'] + '/product/findbyn';
          let favorites=localStorage['URLroot'] + '/favorites';
          let partners=localStorage['URLroot'] + '/partnersusers';
          let match=localStorage['URLroot'] + '/matchusers';
          let usersall=localStorage['URLroot'] + '/allusers';          
          if(product>0){
            let resp = route.split('/');
            routepro=routepro + '/' + resp[5];
            this.ProductID = resp[5];
          }
          if(edit>0){
            let rese = route.split('/');
            routeedit=routeedit + '/' + rese[5];
            this.ProductID = rese[5];
          }
          if(trader>0){
            let trad = route.split('/');
            routetrad=routetrad + '/' + trad[5];
            this.TraderID = trad[5];
          }
          if(alltra>0){
            routeallt=route;
          }
          if(findby>0){
            routefindbyc=route;
          }
          if(findbyn>0){
            routefindbyn=route;
          }
          if(myskills>0){
            myskills=route;
          }
          if(myservices>0){
            myservices=route;
          }
          if(mygoods>0){
            mygoods=route;
          }                                    
          switch (route) {
            case profile:
              this.title="User Profile Dashboard";
              this.CenterContent=1;
              break;
            case addnew:
              this.title="My Business Page";
              this.CenterContent=2;
              break;
            case routepro:
              this.title="My Business Page";
              this.CenterContent=3;
              break;
            case routeedit:
              this.title="My Business Page";
              this.CenterContent=4;
              break;
            case routetrad:
              this.title="My Business Page";
              this.CenterContent=5;
              break;
            case routeallt:
              this.title="The Market";
              this.CenterContent=6;
              break;
            case routefindbyc:
              this.title="The Market";
              this.CenterContent=7;
              break;
            case routefindbyn:
              this.title="The Market";
              this.CenterContent=8;
              break;
            case favorites:
              this.title="My Wish List";
              this.CenterContent=9;
              break;
            case notifications:
              this.title="My Business Page";
              this.CenterContent=10;
              break;
            case users:
              this.title="My Business Page";
              this.CenterContent=11;
              break;
            case documents:
              this.title="User Profile Dashboard";
              this.CenterContent=12;
              break;
            case choose:
              this.title="User Profile Dashboard";
              this.CenterContent=13;
              break;
            case ratings:
              this.title="User Profile Dashboard";
              this.CenterContent=14;
              break;
            case mytrades:
              this.title="My Ads";
              this.CenterContent=15;
              break;
            case myservices:
              this.title="My Services";
              this.CenterContent=16;
              break;
            case myskills:
              this.title="My Skills";
              this.CenterContent=17;
              break;
            case mygoods:
              this.title="My Goods";
              this.CenterContent=18;
              break;
            case completed:
              this.title="My Previous Trades";
              this.CenterContent=19;
              break;              
            case partners:
              this.title="User Profile Dashboard";
              this.CenterContent=20;
              break;              
            case match:
              this.title="User Profile Dashboard";
              this.CenterContent=21;
              break;              
            default:
              this.title="User Profile Dashboard";
              this.CenterContent=0;
              break;
          }
        },
        /*FindByName(){
          var ValueToFind=this.findbyname;
          var Url=localStorage['URLroot'];
          axios.get(Url + '/product/findbyn/' + ValueToFind)
          .then(function(response) {
            location.href = response.data.redirect;
          });
        },*/
      },    
      mounted() {
        axios.get(localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.ShowCenterContent(response.data)));
        axios.get( localStorage['URLroot'] + '/getUserName').then(response => (this.Getuser = response.data));
        axios.get(localStorage['URLroot'] + '/images/haveavatar').then(response => (this.HaveAvatar = response.data));
        axios.get(localStorage['URLroot'] + '/GetNotifications').then(response => (this.Notifications = response.data));
        axios.get(localStorage['URLroot'] + '/GetMyMessages').then(response => (this.MyMessages = response.data));
        axios.get(localStorage['URLroot'] + '/CountMyMessages').then(response => (this.CountMyMess = response.data));
      }
  }
</script>