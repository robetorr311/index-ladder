<template>
  <section id="HelpTrades">
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <span class="card-link" data-toggle="collapse" href="#collapseOne">
          <h3 class="color-title">Sign up form</h3>
        </span>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <video class="help_video" loop controls>
            <source :src="URLsignupform" type="video/mp4">
          </video>
          <p align="justify">
Click on Sign up choice in top bar, Enter name, password and email and click in submit button.
          </p>
          <p align="justify">After your values is saved go to you email account and wait by the email confirmation.</p>
          <p align="justify">Click in link to redirect to the site to can login in indexladder.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <span class="card-link" data-toggle="collapse" href="#collapseTwo">
          <h3 class="color-title">Settings</h3>
        </span>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <video class="help_video" loop controls>
            <source :src="URLsettings" type="video/mp4">
          </video>
          <p align="justify">
Go to Dashboard an click in Settings. Edit Values button. Set the stripe account change you avatar, upload your documents and choose you commodities, services and skill to share with index-ladder community</p>
        </div>
      </div>
    </div>    
  </div>
  </section>
</template>
<script>
export default {
  data() {
    return {
        URLsignupform: localStorage['URLroot'] + '/videos/signup.mp4',
        URLsettings: localStorage['URLroot'] + '/videos/settings.mp4',
      }
    },
    methods: {
    },      
    mounted() {
     
  }
}
</script>