<template>
  <div>
  <!-- Navigation -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top"> -->
    <nav v-if="Getuser.logg>0" class="navbar navbar-marketing navbar-expand-lg bg-light navbar-light fixed-top">
    <div class="container-fluid">
      <img :src="URLImagelogo" class="topbar-logo"> <a :href="homeUrl" class="navbar-brand text-logo" ><span class="color_head3"> INDEX LADDER</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a :href="dashboardUrl" class="nav-link"><span class="color_head3"><i class="fas fa-tachometer-alt"></i> Dashboard </span></a>
          </li>          
          <li  class="nav-item dropdown" v-if="Notifications.length">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <span class="color_head3"><i class="fas fa-bell"></i><sup><span class="have-notificatons"><i class="fas fa-circle fa-sm"></i></span></sup> Notifications </span>
            </a>
            <div class="dropdown-menu">
              <span v-for="note in Notifications">
                <a class="dropdown-item" :href="Urlproduct + note.product_id "><i class="fas fa-bell"></i> {{ note.message }}</a>
              </span>
            </div>            
          </li>
          <li class="nav-item" v-else>
            <a :href="homeUrl" class="nav-link"><span class="color_head3"><i class="fas fa-shopping-cart"></i> Notifications </span></a>
          </li>
          <li  class="nav-item dropdown" v-if="CartTrades.length">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <span class="color_head3"><i class="fas fa-shopping-cart"></i><sup><span class="have-inprogress">{{ inprogress }}</span></sup> Cart </span>
            </a>
            <div class="dropdown-menu">
              <span v-for="trade in CartTrades">
                <a class="dropdown-item" :href="Urlproduct + trade.id "><i class="fas fa-bell"></i> {{ trade.name }}</a>
              </span>
            </div>            
          </li>
          <li class="nav-item" v-else>
            <a :href="homeUrl" class="nav-link"><span class="color_head3"><i class="fas fa-shopping-cart"></i> Cart </span></a>
          </li>
          <li class="nav-item">
            <a :href="newitemUrl" class="nav-link"><span class="color_head3"><i class="fas fa-handshake"></i> Publish a Trade </span></a>
          </li>
          <li class="nav-item">
            <a :href="favoritesURL" class="nav-link"><span class="color_head3"><i class="fas fa-heart"></i> Your Favorites</span></a>
          </li>
          <li class="nav-item">
            <a :href="profileUrl" class="nav-link"><span class="color_head3"><i class="fas fa-user-cog"></i> Your Profile </span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <span class="color_head3"><i class="fas fa-user-circle"></i> {{ Getuser.name }} </span>
            </a>
            <div class="dropdown-menu">
              <span v-if="HaveAvatar.URLAvatar==='none'"></span>
              <span v-else class="dropdown-item"><img :src="HaveAvatar.URLAvatar" class="rounded-circle" width="50px" height="50px"></span>
              <a class="dropdown-item" :href="logoutUrl"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
          </li>
        </ul>         
      </div>
      </div>
    </nav>
    <nav v-else class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-light fixed-top">
    <div class="container-fluid">
      <img :src="URLImagelogo" class="topbar-logo"> <a :href="homeUrl" class="navbar-brand text-logo" > INDEX LADDER</a>
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
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container-fluid">
        <h1 class="masthead-heading masthead-padding mb-0">THE TRADING PLATFORM – LOW RISK BARTER AND TRADE</h1>
        <h2 class="masthead-subheading mb-0">A trading platform for your essential/non-essentials goods (new, used) commodities,
skills and services at low risk</h2>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
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
         URLImagelogo: localStorage['URLroot'] + '/images/index-ladder-named-logo.png',
         Urlproduct: localStorage['URLroot'] + '/product/view/',
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
            axios.get(localStorage['URLroot'] + '/GetInProgress').then(response => (this.CartTrades = response.data));
            axios.get(localStorage['URLroot'] + '/CountInProgress').then(response => (this.inprogress = response.data));
        }
    }
</script>