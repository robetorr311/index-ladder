<template>
        <div class="card">
          <div class="card-header"><h4 class="card-title">
            <i class="far fa-handshake"></i> Proposals </h4>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-10">      
                <div class="table-responsive">
                  <table class="table table-bordered table-sm">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="item in GetProposals" >
                        <td><img :src="item.image_url" width="100px" ></td>
                        <td>{{ item.name }}</td>
                        <td>{{ item.description }}</td>
                        <td>{{ item.category }}</td>
                        <td><button type="button" @click="view_tradde(item)" class="btn btn-secondary"><i class="far fa-handshake" ></i> View Proposal</button>
                         <button type="button" class="btn btn-secondary" @click="view_message(item)"><i class="fab fa-weixin" ></i> View Message</button> 
          <div class="modal" :id="item.id">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Messages</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <messages-component :product-value="ProductValue" :proposal-value="item.id"></messages-component>  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" @click="acceptTrade(item.id)">Accept Trade</button><button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>


                        </td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
              </div>
            </div>
          </div>
          <div class="modal" id="ShowProposal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Proposal from {{ proposal_username }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="card">
                    <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i>                   
                      <div class="row">
                        <div class="col">
                          <p class="text-left"> {{ proposal_name }}</p>
                        </div>
                        <div class="col">
                          <p class="text-right" v-if="proposal_amount">Currently valued in $ {{ proposal_amount }}</p>
                        </div>
                      </div></h4>
                    </div>
                    <img :src="proposal_image" class="img-fluid mx-auto d-block">
                    <div class="card-body">
                      <p class="card-text">{{ proposal_cat }} </p>
                      <p class="card-text">{{ proposal_desc }} </p>
                      <p class="card-text">{{ proposal_username }} </p>
                      <p class="card-text">{{ proposal_phone }} </p>
                      <p class="card-text">{{ proposal_email }} </p>
                      <div class="row">
                        <div class="col">
                          <p class="text-left"> Time of Service: <select v-model="time_service" class="form-control" name="time_service">
                          <option value="" >Choose Time</option>
                          <option v-for="option in TimeExchange" v-bind:value="option.id">
                             {{ option.name }}
                          </option>
                            </select>
                          </p>
                          <p class="text-left"> Starting At: <datepicker v-model="starting_at" :format="customstartingFormatter"></datepicker></p>
                          <p class="text-left"> End At: <datepicker v-model="end_at" :format="customendFormatter"></datepicker></p>
                        </div>
                      </div></h4>                      
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" @click="acceptTrade(proposal_id)">Accept Trade</button><button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>                    
        </div>
</template>
<script>
import Datepicker from 'vuejs-datepicker';
    export default {
        components: {
          Datepicker,
        },      
        data() {
            return {
              message: '',
              resp:'',
              GetProposals:'',
              proposal_name:'',
              proposal_desc:'',
              proposal_image:'',
              proposal_cat:'',
              proposal_amount:'',
              proposal_id:'',
              proposal_email:'',
              proposal_username:'',
              proposal_phone: '',
              ProposalValue:'',
              TimeExchange:[],
              time_service:'',
              starting_at:'',
              end_at:'',
            };
        },
        props: [
            'ProductValue',
          ],        
        methods: {
          view_tradde(item){
            this.proposal_name=item.name;
            this.proposal_desc=item.description;
            this.proposal_image=item.image_url;
            this.proposal_cat=item.category;
            this.proposal_amount=item.amount;
            this.proposal_id=item.id;
            this.proposal_email=item.email;
            this.proposal_username=item.username;
            this.proposal_phone=item.phone; 
            this.ProposalValue=item.id;           
            $('#ShowProposal').modal({show:true});
          },
          view_message(item){
            $('#'+item.id).modal({show:true});
          },
          acceptTrade(proposal_id){
            axios.post( localStorage['URLroot'] + '/trade/accept' ,
            {
              csrfToken: myToken.csrfToken,
              proposal_id: this.ProposalValue,
              time_service: this.time_service,
              starting_at: this.starting_at,
              end_at: this.end_at              
            }
            ).then(response => (this.MyMessages = response.data));
            $('#ShowMessages').modal('hide');
            $('#ShowProposal').modal('hide');
            this.showSuccess();
          },
          showSuccess(){
              setTimeout(() => {
                location.reload();
              },2000);        
          },
        customstartingFormatter(date) {
         let mnt=date.getMonth() + 1;
         let yr=date.getFullYear();
         let dy=date.getDate();
         let hr=date.getHours();
         let mn=date.getMinutes();
         let sc=date.getSeconds();
         let ms=date.getMilliseconds();
         let output= yr + '-' + mnt + '-' + dy;
         this.starting_at=yr + '-' + mnt + '-' + dy;
         return output;
        }, 
        customendFormatter(date) {
         let mnt=date.getMonth() + 1;
         let yr=date.getFullYear();
         let dy=date.getDate();
         let hr=date.getHours();
         let mn=date.getMinutes();
         let sc=date.getSeconds();
         let ms=date.getMilliseconds();
         let output= yr + '-' + mnt + '-' + dy;
         this.end_at=yr + '-' + mnt + '-' + dy;
         return output;
        },                  
          startInterval() {
            setInterval(() => {
               axios.get( localStorage['URLroot'] + '/GetPProposals/' + this.ProductValue).then(response => (this.GetProposals = response.data));
            }, 2000)
          },          
        },
        mounted() {
            axios.get( localStorage['URLroot'] + '/GetTimeServices').then(response => (this.TimeExchange = response.data));
            axios.get( localStorage['URLroot'] + '/GetPProposals/' + this.ProductValue).then(response => (this.GetProposals = response.data));
            this.startInterval();
        }         
    }
</script>