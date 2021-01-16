<template>
        <div class="card">
          <div class="card-header"><h4 class="card-title">
            <i class="far fa-handshake"></i> Proposals </h4>
          </div>
          <div class="card-body">

          </div>
        </div>
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule]);
});

// with typescript
for (let [rule, validation] of Object.entries(rules)) {
  extend(rule, {
    ...validation
  });
}

    export default {
        components: {
          ValidationObserver,
          ValidationProvider,
        },        
        mounted() {
            console.log('Component successfully mounted.')
        },
        data() {
            return {
                message: '',
                resp:'',
                MyMessages:'',
                MyResponse: '',
                Getuser:'',
            };
        },
        props: [
            'ProductValue',
            'ProposalValue'
          ],        
        methods: {
          SendMessage(){
            axios.post( localStorage['URLroot'] + '/messages/store' ,
            {
              csrfToken: myToken.csrfToken,
              message:this.message,
              product_id: this.ProductValue,
              proposal_id: this.ProposalValue
            }
            ).then(response => (this.MyMessages = response.data));
          },
          Ask(id){
            this.MyResponse=id;       
          },
          Delete(id){
            axios.post( localStorage['URLroot'] + '/messages/delete' ,
            {
              csrfToken: myToken.csrfToken,
              message_id: id,
              product_id: this.ProductValue,
            }
            ).then(response => (this.MyMessages = response.data));
          },
          Sendresp(id){
            axios.post( localStorage['URLroot'] + '/messages/SendResponse' ,
            {
              csrfToken: myToken.csrfToken,
              message:this.resp,
              parent_id: id,
              product_id: this.ProductValue,
              proposal_id: this.ProposalValue
            }
            ).then(response => (this.MyMessages = response.data));
            this.MyResponse='';
          },
          startInterval() {
            setInterval(() => {
               axios.get( localStorage['URLroot'] + '/GetMessages/' + this.ProductValue).then(response => (this.MyMessages = response.data));
            }, 2000)
          },          
        },
        mounted() {
            axios.get( localStorage['URLroot'] + '/GetMessages/' + this.ProductValue).then(response => (this.MyMessages = response.data));
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser = response.data));
            this.startInterval()
        }         
    }
</script>