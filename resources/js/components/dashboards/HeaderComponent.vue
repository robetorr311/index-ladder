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
            <a :href="dashboardUrl" class="nav-link"><span class="color_head2"><i class="fas fa-store"></i> The Market </span></a>
          </li>
          <li class="nav-item">
            <a :href="dashboardUrl" class="nav-link"><span class="color_head2"><i class="fas fa-ad"></i> My Ads </span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <span class="color_head2"><i class="fas fa-user-circle"></i> User Profile </span>
            </a>
            <div class="dropdown-menu background_dropdown">
              <a :href="dashboardUrl" class="dropdown-item item_dropdown"><i class="fas fa-user-cog"></i> User Profile Dashboard </a>
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-handshake"></i> My Business Page</a> 
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-heart"></i> My Wish List</a>
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-user-graduate"></i> My Skills</a>
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-wrench"></i> My Services</a>
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="fas fa-tag"></i> My Goods</a>
              <a :href="favoritesURL" class="dropdown-item item_dropdown"><i class="far fa-handshake"></i> Previous Trades</a>              
              <a class="dropdown-item item_dropdown" :href="logoutUrl"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
          </li>
        </ul>         
      </div>
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
    </div>
  </nav>
  <header v-if="Getuser.logg===0" class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container-fluid">
        <h1 class="masthead-heading masthead-padding mb-0">Trade Semantics - Trade without Money</h1>
        <h2 class="masthead-subheading mb-0">A trading platform for your essential/non-essentials goods(new, used) commodities, skills and services.</h2>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
  <header v-else class="masthead_top_padding"></header>
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
         URLnot: localStorage['URLroot'] + '/notifications',
         usersUrl: localStorage['URLroot'] + '/users',
         inprogress:'',
         CartTrades:'',
       }
    },      
        methods : {
        },
        mounted() {
            axios.get( localStorage['URLroot'] + '/getUserName').then(response => (this.Getuser = response.data));
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
            axios.get(localStorage['URLroot'] + '/images/haveavatar').then(response => (this.HaveAvatar = response.data));
            axios.get(localStorage['URLroot'] + '/GetNotifications').then(response => (this.Notifications = response.data));
        }
    }
</script>