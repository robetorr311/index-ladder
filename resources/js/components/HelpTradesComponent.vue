<template>
  <section id="HelpTrades">
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <span class="card-link" data-toggle="collapse" href="#collapseOne">
          <h3 class="color-title">Publish a Trade</h3>
        </span>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <video class="help_video" loop controls>
            <source :src="URLpublishatrade" type="video/mp4">
          </video>
          <p align="justify">
Go to Dashboard an click on Publish a Trade. Entering the name, category, amount, description of item
and uploading a picture.
          </p>
          <p align="justify">After the item is saved the site is redirected to dashboard...</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <span class="card-link" data-toggle="collapse" href="#collapseTwo">
          <h3 class="color-title">Edit a Trade Published</h3>
        </span>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <video class="help_video" loop controls>
            <source :src="URLedittradepublished" type="video/mp4">
          </video>
          <p align="justify">
Go to Dashboard an click on My Trades. Click on Edit Values button. Change the name, category, amount, description of item
or uploaded picture.
          </p>
          <p align="justify">After the item is saved the site is redirected to dashboard...</p>
        </div>
      </div>
    </div>    
    <div class="card">
      <div class="card-header">
        <span class="card-link" data-toggle="collapse" href="#collapsethird">
            <h3 class="color-title">Propose an Exchange</h3>
        </span>
      </div>
      <div id="collapsethird" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <video class="help_video" loop controls>
            <source :src="URLproposeexchange" type="video/mp4">
          </video>
          <p align="justify">Go to Market or trades tha may interest you section to see the items and click over image.</p>
          <p align="justify">The site show Trade Number, Name, Image, Category and description of item
published by host user. You can click on heart to add item to his favorite list or make a proposal clicking over
button.</p>
          <p align="justify">In the modal enter the name, category, amount, description of item
and uploading a picture.</p>
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
        URLpublishatrade: localStorage['URLroot'] + '/videos/publishatrade.mp4',
        URLedittradepublished: localStorage['URLroot'] + '/videos/edittradepublished.mp4',
        URLproposeexchange: localStorage['URLroot'] + '/videos/proposeexchange.mp4',
      }
    },
    methods: {
    },      
    mounted() {
     
  }
}
</script>