<template>
  <div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid">
      <img :src="logoImages" class="topbar-logo"> <a :href="homeUrl" class="navbar-brand" >INDEX LADDER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div v-if="Getuser.logg>0" class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a :href="homeUrl" class="nav-link"><i class="fas fa-bell"></i></a>
          </li>
          <li class="nav-item">
            <a :href="homeUrl" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
          </li>                  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
               <i class="fas fa-user-circle"></i> {{ Getuser.name }}
            </a>
            <div class="dropdown-menu">
              <span v-if="HaveAvatar.URLAvatar==='none'"></span>
              <span v-else class="dropdown-item"><img :src="HaveAvatar.URLAvatar" class="rounded-circle" width="50px" height="50px"></span>
              <a class="dropdown-item" :href="profileUrl"><i class="fas fa-user-cog"></i> Profile</a>
              <a class="dropdown-item" :href="newitemUrl"><i class="fas fa-boxes"></i> Add New Item</a>
              <a class="dropdown-item" :href="favoritesURL"><i class="fas fa-heart"></i> My Favorites</a>              
              <a class="dropdown-item" :href="homeUrl"><i class="fas fa-shopping-bag"></i> My shopping</a>
              <a class="dropdown-item" :href="salesURL"><i class="fas fa-store-alt"></i> My sales</a>
              <a class="dropdown-item" :href="logoutUrl"><i class="fas fa-sign-out-alt"></i> Log Out</a>
            </div>
          </li>
        </ul>         
      </div>
      <div v-else class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a :href="registrationUrl" class="nav-link"><i class="fas fa-user-plus"></i> Sign Up</a>
          </li>
          <li class="nav-item">
            <a :href="loginUrl" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log In</a>
          </li>       
        </ul>       
      </div>      
    </div>
  </nav>
  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container-fluid">
        <h1 class="masthead-heading mb-0">THE TRADING PLATFORM – LOW RISK BARTER AND TRADE</h1>
        <h2 class="masthead-subheading mb-0">A trading platform for your essential/non-essentials goods (new, used) commodities,
skills and services at low risk</h2>
        <div v-if="Getuser.logg>0"><a :href="homeUrl + '/gallery'" class="btn btn-primary btn-xl rounded-pill mt-5">See More</a></div>
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
         getHomeURL: ''
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
            axios.get(localStorage['URLroot'] + '/images/haveavatar').then(response => (this.HaveAvatar = response.data));
        }
    }
</script>