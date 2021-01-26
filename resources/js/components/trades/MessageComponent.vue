<template>
  <div class="card">
  <div class="card-header"><h5 class="card-title"><i class="fas fa-comments"></i> Messages / Questions about Trade</h5> </div>
  <div class="card-body">
    <div class="row justify-content-center" v-if="MyMessages">
      <div class="col">
      </div>
    </div>
    <div class="row justify-content-center" v-else>
      <div class="col">        
        <ValidationProvider name="message" rules="max:249" v-slot="{ errors }">
          <div class="input-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
            </div>
            <textarea v-model="message" class="form-control" name="message" placeholder="Write message"></textarea>
            <div class="input-group-append">
               <button class="btn btn-secondary" @click="SendMessage"><i class="far fa-paper-plane"></i> Send</button>
            </div>
            <span class="has-error">{{ errors[0] }}</span>
          </div>
        </ValidationProvider>
      </div>
    </div>
    <div v-for="mes in MyMessages">
    <div class="row justify-content-center" >
      <div class="col">
          <div class="input-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
            </div>
            <span class="form-control category-choices">{{ mes.message }}</span>
            <div v-if="mes.user_id===Getuser.id">
               <button class="btn btn-secondary" @click="Delete(mes.id)"><i class="far fa-trash-alt"></i></button>
            </div>
            <div class="input-group-append" v-else>
               <button class="btn btn-secondary" @click="Ask(mes.id)"><i class="far fa-paper-plane"></i></button>
            </div>            
          </div>
      </div>
    </div>
    <div class="row justify-content-center" v-if="MyResponse===mes.id">
      <div class="col">
        <ValidationProvider name="resp" rules="max:249" v-slot="{ errors }">
          <div class="input-group" >
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
            </div>
            <textarea v-model="resp" class="form-control" name="resp" placeholder="Write message"></textarea>
            <div class="input-group-append">
               <button class="btn btn-secondary" @click="Sendresp(mes.id)"><i class="far fa-paper-plane"></i> Send</button>
            </div>
            <span class="has-error">{{ errors[0] }}</span>
          </div>
        </ValidationProvider>
      </div>
    </div>  
    </div>   
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
               axios.get( localStorage['URLroot'] + '/GetMessages/' + this.ProductValue + '/' + this.ProposalValue).then(response => (this.MyMessages = response.data));
            }, 2000)
          },          
        },
        mounted() {
            axios.get( localStorage['URLroot'] + '/GetMessages/' + this.ProductValue + '/' + this.ProposalValue).then(response => (this.MyMessages = response.data));
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser = response.data));
            this.startInterval()
        }         
    }
</script>