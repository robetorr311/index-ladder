<template>
  <div>
  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top"> -->
    <nav v-if="Getuser.logg>0" class="navbar navbar-marketing navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <img :src="URLImagelogo" class="topbar-logo"> <a :href="homeUrl" class="navbar-brand text-logo" ><span class="color_head2"> Index Ladder</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a :href="dashboardUrl" class="nav-link"><span class="color_head2"><i class="fas fa-home"></i> Home </span></a>
          </li>
          <li class="nav-item">
            <a :href="Urlmarket" class="nav-link"><span class="color_head2"><i class="fas fa-store"></i> The Market </span></a>
          </li>
          <li class="nav-item">
            <a :href="mytradesUrl" class="nav-link"><span class="color_head2"><i class="fas fa-ad"></i> My Ads </span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <span class="color_head2"><i class="fas fa-user-circle"></i> User Profile </span>
            </a>
            <div class="dropdown-menu background_dropdown">
              <a :href="dashboardUrl" class="dropdown-item item_dropdown"><i class="fas fa-user-cog"></i> User Profile Dashboard </a>
              <a :href="addnewURL" class="dropdown-item item_dropdown"><i class="fas fa-handshake"></i> My Business Page</a> 
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-heart"></i> My Wish List</a>
              <a :href="myskillsUrl" class="dropdown-item item_dropdown"><i class="fas fa-user-graduate"></i> My Skills</a>
              <a :href="myservicesUrl" class="dropdown-item item_dropdown"><i class="fas fa-wrench"></i> My Services</a>
              <a :href="mygoodsUrl" class="dropdown-item item_dropdown"><i class="fas fa-tag"></i> My Goods</a>
              <a :href="completedURL" class="dropdown-item item_dropdown"><i class="far fa-handshake"></i> Previous Trades</a>            
              <a class="dropdown-item item_dropdown" :href="logoutUrl"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
          </li>
        </ul>         
      </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" v-model="ValueToF" placeholder="Search" aria-label="Search">
        <button class="btn btn-masthead" type="submit" @click="FindByName"><i class="fas fa-search"></i></button>
      </form>
      </div>
    </nav>
    <nav v-else class="navbar navbar-marketing navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <img :src="URLImagelogo" class="topbar-logo"> <a :href="homeUrl" class="navbar-brand text-logo" ><span class="color_head2">Index Ladder</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a :href="registrationUrl" class="nav-link"><span class="color_head2"><i class="fas fa-user-plus"></i> Sign Up </span></a>
          </li>
          <li class="nav-item">
            <a :href="loginUrl" class="nav-link"><span class="color_head2"><i class="fas fa-sign-in-alt"></i> Log In </span></a>
          </li>       
        </ul>       
      </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search"  v-model="ValueToF" placeholder="Search" aria-label="Search">
        <button class="btn btn-masthead" type="submit" @click="SearchOffline"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </nav>
  <header v-if="Getuser.logg===0" class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container-fluid">
        <div class="row search_button">
          <div class="col-lg-9">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              
            </div>
          </div>
        </div>
        <h1 class="masthead-heading masthead-padding mb-0">Trade Semantics - Trade without Money</h1>
        <h2 class="masthead-subheading mb-0">A trading platform for your essential/non-essentials goods(new, used) commodities, skills and services.</h2>
      </div>
    </div>
  </header>
  <header v-else class="masthead_white text-center text-darkgray">
    <div class="masthead-content_bgwhite">
      <div class="container-fluid">
        <h1 class="masthead-heading masthead-padding mb-0">{{ title }}</h1>
      </div>
    </div>
  </header>  
  </div> 
</template>


<script>
    export default {
      data() {
        return {
         loginUrl: '',
         logoutUrl: '',
         registrationUrl: '',
         homeUrl: '',
         profileUrl: '',
         favoritesURL:'',
         salesURL: '',
         logg: '',
         user: null,
         Getuser: '',
         urlImages:'',
         logoImages:'',
         HaveAvatar: '',
         newitemUrl: '',
         getHomeURL: '',
         Notifications: '',
         URLImagelogo: localStorage['URLroot'] + '/images/LogoRect.png',
         Urlproduct: localStorage['URLroot'] + '/product/view/',
         Urlmarket: localStorage['URLroot'] + '/trades/all/',
         URLnot: localStorage['URLroot'] + '/notifications',
         usersUrl: localStorage['URLroot'] + '/users',
         addnewURL: localStorage['URLroot'] + '/product/addnew',
         inprogress:'',
         CartTrades:'',
         mytradesUrl: localStorage['URLroot']+ '/mytrades',
         myskillsUrl: localStorage['URLroot']+ '/myskills',
         myservicesUrl: localStorage['URLroot']+ '/myservices',
         mygoodsUrl: localStorage['URLroot']+ '/mygoods',
         completedURL: localStorage['URLroot']+ '/completed',
         searchURL: localStorage['URLroot']+ '/search',
         ValueToF: '',
         title: '',
       }
    },
      props: [ 
        'RoutesValues',
      ],          
      methods : {
        FindByName(){
          var ValueToFind=this.ValueToF;
          var Url=localStorage['URLroot'];
          axios.get(Url + '/product/findbyn/' + ValueToFind)
          .then(function(response) {
            location.href = response.data.redirect;
          });
      },
      Getlogged(response){
        this.Getuser = response;
        if(this.Getuser.logg>0){
          axios.get(localStorage['URLroot'] + '/images/haveavatar').then(response => (this.HaveAvatar = response.data));
          axios.get(localStorage['URLroot'] + '/GetNotifications').then(response => (this.Notifications = response.data));
        }
      },
      SearchOffline(){
        var ValueToFind=this.ValueToF;
        var Url=localStorage['URLroot'];
        axios.get(Url + '/search/findbyn/' + ValueToFind)
        .then(function(response) {
            location.href = response.data.redirect;
        });     
      },
        ShowCenterContent(){
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
      },
      mounted() {
          axios.get(localStorage['URLroot'] + '/getUserName').then(response => (this.Getlogged(response.data)));
          this.homeUrl = localStorage['URLroot'];
          this.loginUrl = localStorage['URLroot'] + '/login-user';
          this.logoutUrl = localStorage['URLroot'] + '/logout';
          this.registrationUrl = localStorage['URLroot'] + '/registration';
          this.profileUrl=  localStorage['URLroot'] + '/profile';  
          this.logoImages= localStorage['URLroot'] + '/images/logo.png';
          this.newitemUrl= localStorage['URLroot']+ '/product/addnew';
          this.favoritesURL= localStorage['URLroot']+ '/favorites';
          this.salesURL= localStorage['URLroot']+ '/sales';
          this.dashboardUrl= localStorage['URLroot']+ '/dashboard';
          this.ShowCenterContent();
      }
    }
</script>