<template>
      <div v-if="show==='1'">
        <div  v-if="success==='success'" class="alert alert-success">
          <strong>Success!! {{ message }} </strong>
        </div> 
        <div  v-else class="alert alert-danger">
          <strong>Fail!! {{ message }} </strong>
        </div>          
      </div>
</template>
<script>
    export default {
    data() {
      return {
      	show: '0',
      	message: '',
        success: ''
      }
    },    	
    props: ['body'],
        methods: {
            hide() {
                this.show = '0';
                localStorage.setItem( 'message', 'none|none|0' );
            }
        },    
    mounted() {
      var value = localStorage['message'];
      var str=value.split('|');
      if(value.length>0){
          this.success=str[0];
          this.message=str[1];
          this.show=str[2];
          setTimeout(() => {
            this.hide()
          },6000);           
      }
    }    
}
</script>