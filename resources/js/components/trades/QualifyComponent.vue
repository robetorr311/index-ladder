<template>
  <div class="card">
    <div class="card-header"><h5 class="card-title"><i class="fas fa-star"></i> Score and comments</h5></div>
      <div class="card-body">
        <p class="card-stars">
          <span v-if="qualify===1">
          <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===2">
          <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===3">
          <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===6">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===7">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===8">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="qualify===9">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
        </span>
        <span v-else-if="qualify===10">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span v-else>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        </p>
        <div class="row justify-content-center" v-for="comment in MyComments">
          <div class="col">
          <div class="card">
            <div class="card-header"><i class="fas fa-comment"></i> Comments</div>
              <div class="card-body card-comments">
                <p class="card-text">User: {{  comment.name }}</p>
                <p class="card-text">Comment: {{ comment.comment }} </p>
              </div>
              <div class="card-footer card-fcomments">
                <p class="card-stars">
                <span v-if="comment.qualify==='1'">
                  <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='2'">
                  <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='3'">
                  <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='4'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='5'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='6'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='7'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='8'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                </span>
                <span v-else-if="comment.qualify==='9'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </span>
                <span v-else-if="comment.qualify==='10'">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </span>
                <span v-else>
                  <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                </span>
              </p>
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
          qualify: 0,
          MyComments: ''
        };
      },
      methods: {
        GetQualify(response){
          this.qualify=response;
          console.log(response);
        }
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/GetHostQualify').then(response => (this.GetQualify(response.data)));
        axios.get(localStorage['URLroot'] + '/MyComments').then(response => (this.MyComments=response.data));
      },        
  }
</script>