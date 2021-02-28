<template>
  <footer class="py-5 bg-black">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
              <h3><span class="footertitle">About US</span></h3>
                <p><a :href="urlHow" class="footerlinks">How it works</a></p>
                <p><a :href="urlNews" class="footerlinks">News</a></p>
                <p><a :href="urlPrivacy" class="footerlinks">Privacy Policy</a></p>
                <p><a :href="urlLegal" class="footerlinks">Legal Terms</a></p>
            </div>
            <div class="col-md-4">
              <h3><span class="footertitle">For Traders</span></h3>
                <p><a :href="urlCategories" class="footerlinks">Categories</a></p>
                <p><a :href="urlForums" class="footerlinks">Forum</a></p>
                <p><a :href="urlBlog" class="footerlinks">Blog</a></p>
                <p><a :href="urlFAQs" class="footerlinks">FAQs</a></p>          
            </div>
            <div class="col-md-4">
              <h3><span class="footertitle">Contact us</span></h3>
                <span class="footertitle"><p>The address of company Index Ladder here...</p></span>
                <span class="footertitle"><p>info@indexladder.com</p></span>
                <div class="row">
                  <div class="col-md-10">
                    <h3><span class="footertitle">Contact form</span></h3>
                      <form>
                      <div class="row">
                          <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-10">
                            <div class="input-group" >
                              <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
                          </div>
                              <textarea class="form-control" name="content" placeholder="content"></textarea>  
                            </div>
                        </div>                        
                      </div>
                      <button type="submit" class="btn btn-secondary rounded-pill mt-5">Send</button>
                      </form>
                    </div>
                  </div>
            </div>                        
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="social-links">
              <a :href="urlTwitter" class="twitter"><i class="fab fa-twitter"></i></span></a>
              <a :href="urlFacebook" class="facebook"><i class="fab fa-facebook"></i></a>
              <a :href="urlInstagram" class="instagram"><i class="fab fa-instagram"></i></a>
            </div>
            </div>
        </div>        
        <div class="row justify-content-center">
            <div class="col-md-12">
              <p class="m-0 text-center text-white small">Copyright &copy; Index Ladder 2020</p>
            </div>
        </div>              
      
    </div>
    <!-- /.container -->
  </footer>	
</template>


<script>
    export default {
  data() {
    return {
      urlHow:  '',
      urlNews:  '',
      urlPrivacy:  '',
      urlLegal:  '',
      urlCategories:  '',
      urlForums:  '',
      urlBlog:  '',
      urlFAQs:  '',
      urlTwitter: 'https://www.twitter.com',
      urlFacebook: 'https://www.facebook.com',
      urlInstagram: 'https://www.instagram.com' }
    },
    mounted() {
          var value = localStorage['URLroot'];
          this.urlHow= value + '/how';
          this.urlNews= value + '/news';
          this.urlPrivacy= value + '/privacy';
          this.urlLegal= value + '/legal';
          this.urlCategories= value;
          this.urlForums= value;
          this.urlBlog= value;
          this.urlFAQs= value + '/faq';
          this.urlTwitter= 'https://www.twitter.com';
          this.urlFacebook= 'https://www.facebook.com';
          this.urlInstagram= 'https://www.instagram.com';
        }
    }
</script>