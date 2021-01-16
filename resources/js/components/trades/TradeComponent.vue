<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="card">
      <div class="card-header"><h5 class="card-title"><i class="far fa-handshake"></i> Trade Number: {{ tradde_number }}</h5></div>
      <div class="card-body">
        <div class="card">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i>                   
            <div class="row">
              <div class="col">
                  <p class="text-left"> {{ name }}</p>
                </div>
                <div class="col">
                  <p class="text-right" v-if="amount">Currently valued in $ {{ amount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="image_url" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ category }} </p>
            <p class="card-text">{{ description }} </p>
          </div>
        </div>
        <div v-if="showAllProposals">
         <showproposals-component :product-value="ProductValue"></showproposals-component>
        </div>        
        <div class="card" v-if="exchange">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i> To be Exchange by                   
            <div class="row">
              <div class="col">
                <p class="text-left"> {{ exchname }}</p>
              </div>
              <div class="col">
                <p class="text-right" v-if="exchamount">Currently valued in $ {{ exchamount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="exchimage_url" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ exchcategory }} </p>
            <p class="card-text">{{ exchdescription }} </p>
          </div>
        </div>
        <div class="card" v-if="showMyProposal">
          <div class="card-header"><h4 class="card-title"><i class="far fa-handshake"></i>                   
            <div class="row">
              <div class="col">
                <p class="text-left"> {{ pr_name }}</p>
              </div>
              <div class="col">
                <p class="text-right" v-if="pr_amount">Currently valued in $ {{ pr_amount }}</p>
              </div>
            </div></h4>
          </div>
          <img :src="pr_image" class="img-fluid mx-auto d-block">
          <div class="card-body">
            <p class="card-text">{{ pr_cat }} </p>
            <p class="card-text">{{ pr_desc }} </p>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col" v-if="show_like">
            <p class="text-left" v-if="Getuser.logg>0">
              <i class="far fa-heart cursor" v-if="Getlike.success==='Fail'" @click="likeItem"></i>
              <i class="fas fa-heart" v-else></i>
            </p>
            <p class="text-left" v-else>
              <i class="far fa-heart cursor" v-if="like" @click="likeItem"></i>
              <i class="fas fa-heart" v-else></i>
            </p>                    
          </div>
          <div class="col" v-if="showSendPropose">
            <p class="text-right">
              <button type="button" data-toggle="modal" data-target="#ProposeExchange" class="btn btn-secondary" @click="startInterval"><i class="fas fa-shopping-cart cursor" ></i> Propose Exchange </button>
            </p>
          </div>
          <div v-else></div>
          <div class="col" v-if="showCancel">
            <p class="text-right">
          <button type="button" data-toggle="modal" data-target="#myCancel" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Cancel This Trade</button>
            </p>
              <div class="modal" id="myCancel" >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Cancel the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="fairness" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ fairness_title }}
                            <span v-if="fairness===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="fairness===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="fair(1)"></i><i class="far fa-star" @click="fair(2)"></i><i class="far fa-star" @click="fair(3)"></i><i class="far fa-star" @click="fair(4)"></i><i class="far fa-star" @click="fair(5)"></i><i class="far fa-star" @click="fair(6)"></i><i class="far fa-star" @click="fair(7)"></i><i class="far fa-star" @click="fair(8)"></i><i class="far fa-star" @click="fair(9)"></i><i class="far fa-star" @click="fair(10)"></i>
                            </span>                            
                            <input v-model="fairness" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="description" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ description_title }}
                            <span v-if="description===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="description===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="desc(1)"></i><i class="far fa-star" @click="desc(2)"></i><i class="far fa-star" @click="desc(3)"></i><i class="far fa-star" @click="desc(4)"></i><i class="far fa-star" @click="desc(5)"></i><i class="far fa-star" @click="desc(6)"></i><i class="far fa-star" @click="desc(7)"></i><i class="far fa-star" @click="desc(8)"></i><i class="far fa-star" @click="desc(9)"></i><i class="far fa-star" @click="desc(10)"></i>
                            </span>                            
                            <input v-model="description" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="utility" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ utility_title }}
                            <span v-if="utility===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="utility===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="util(1)"></i><i class="far fa-star" @click="util(2)"></i><i class="far fa-star" @click="util(3)"></i><i class="far fa-star" @click="util(4)"></i><i class="far fa-star" @click="util(5)"></i><i class="far fa-star" @click="util(6)"></i><i class="far fa-star" @click="util(7)"></i><i class="far fa-star" @click="util(8)"></i><i class="far fa-star" @click="util(9)"></i><i class="far fa-star" @click="util(10)"></i>
                            </span>                            
                            <input v-model="utility" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="satisfied" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ satisfied_title }}
                            <span v-if="satisfied===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="satisfied===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="satis(1)"></i><i class="far fa-star" @click="satis(2)"></i><i class="far fa-star" @click="satis(3)"></i><i class="far fa-star" @click="satis(4)"></i><i class="far fa-star" @click="satis(5)"></i><i class="far fa-star" @click="satis(6)"></i><i class="far fa-star" @click="satis(7)"></i><i class="far fa-star" @click="satis(8)"></i><i class="far fa-star" @click="satis(9)"></i><i class="far fa-star" @click="satis(10)"></i>
                            </span>                            
                            <input v-model="satisfied" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="honesty" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ honesty_title }}
                            <span v-if="honesty===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="honesty===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="hones(1)"></i><i class="far fa-star" @click="hones(2)"></i><i class="far fa-star" @click="hones(3)"></i><i class="far fa-star" @click="hones(4)"></i><i class="far fa-star" @click="hones(5)"></i><i class="far fa-star" @click="hones(6)"></i><i class="far fa-star" @click="hones(7)"></i><i class="far fa-star" @click="hones(8)"></i><i class="far fa-star" @click="hones(9)"></i><i class="far fa-star" @click="hones(10)"></i>
                            </span>                            
                            <input v-model="honesty" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">                    
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments" placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="cancel_trade"><i class="fas fa-shopping-cart cursor" ></i>Cancel</button>
                    </div>
                  </div>
                </div>
              </div>            
          </div>
          <div v-else></div>
          <div class="col" v-if="showFinish">
            <p class="text-right">
          <button type="button" data-toggle="modal" data-target="#myFinish" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Finish This Trade</button>        
            </p>
              <div class="modal" id="myFinish">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Finish the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="fairness" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ fairness_title }}
                            <span v-if="fairness===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="fairness===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="fair(1)"></i><i class="far fa-star" @click="fair(2)"></i><i class="far fa-star" @click="fair(3)"></i><i class="far fa-star" @click="fair(4)"></i><i class="far fa-star" @click="fair(5)"></i><i class="far fa-star" @click="fair(6)"></i><i class="far fa-star" @click="fair(7)"></i><i class="far fa-star" @click="fair(8)"></i><i class="far fa-star" @click="fair(9)"></i><i class="far fa-star" @click="fair(10)"></i>
                            </span>                            
                            <input v-model="fairness" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="description" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ description_title }}
                            <span v-if="description===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="description===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="desc(1)"></i><i class="far fa-star" @click="desc(2)"></i><i class="far fa-star" @click="desc(3)"></i><i class="far fa-star" @click="desc(4)"></i><i class="far fa-star" @click="desc(5)"></i><i class="far fa-star" @click="desc(6)"></i><i class="far fa-star" @click="desc(7)"></i><i class="far fa-star" @click="desc(8)"></i><i class="far fa-star" @click="desc(9)"></i><i class="far fa-star" @click="desc(10)"></i>
                            </span>                            
                            <input v-model="description" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="utility" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ utility_title }}
                            <span v-if="utility===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="utility===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="util(1)"></i><i class="far fa-star" @click="util(2)"></i><i class="far fa-star" @click="util(3)"></i><i class="far fa-star" @click="util(4)"></i><i class="far fa-star" @click="util(5)"></i><i class="far fa-star" @click="util(6)"></i><i class="far fa-star" @click="util(7)"></i><i class="far fa-star" @click="util(8)"></i><i class="far fa-star" @click="util(9)"></i><i class="far fa-star" @click="util(10)"></i>
                            </span>                            
                            <input v-model="utility" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="satisfied" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ satisfied_title }}
                            <span v-if="satisfied===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="satisfied===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="satis(1)"></i><i class="far fa-star" @click="satis(2)"></i><i class="far fa-star" @click="satis(3)"></i><i class="far fa-star" @click="satis(4)"></i><i class="far fa-star" @click="satis(5)"></i><i class="far fa-star" @click="satis(6)"></i><i class="far fa-star" @click="satis(7)"></i><i class="far fa-star" @click="satis(8)"></i><i class="far fa-star" @click="satis(9)"></i><i class="far fa-star" @click="satis(10)"></i>
                            </span>                            
                            <input v-model="satisfied" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="honesty" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ honesty_title }}
                            <span v-if="honesty===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="honesty===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="hones(1)"></i><i class="far fa-star" @click="hones(2)"></i><i class="far fa-star" @click="hones(3)"></i><i class="far fa-star" @click="hones(4)"></i><i class="far fa-star" @click="hones(5)"></i><i class="far fa-star" @click="hones(6)"></i><i class="far fa-star" @click="hones(7)"></i><i class="far fa-star" @click="hones(8)"></i><i class="far fa-star" @click="hones(9)"></i><i class="far fa-star" @click="hones(10)"></i>
                            </span>                            
                            <input v-model="honesty" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">                    
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments" placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="finish_trade"><i class="fas fa-shopping-cart cursor" ></i>Finish</button>
                    </div>
                  </div>
                </div>
              </div>            
          </div>
          <div v-else></div>
          <div class="col" v-if="showConfirm">
            <p class="text-right">
          <button type="button" data-toggle="modal" data-target="#myConfirm" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> Confirm Trade Finished</button>        
            </p>
              <div class="modal" id="myConfirm">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Confirm the Trade</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="fairness" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ fairness_title }}
                            <span v-if="fairness===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="fairness===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="fairness===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="fair(1)"></i><i class="far fa-star" @click="fair(2)"></i><i class="far fa-star" @click="fair(3)"></i><i class="far fa-star" @click="fair(4)"></i><i class="far fa-star" @click="fair(5)"></i><i class="far fa-star" @click="fair(6)"></i><i class="far fa-star" @click="fair(7)"></i><i class="far fa-star" @click="fair(8)"></i><i class="far fa-star" @click="fair(9)"></i><i class="far fa-star" @click="fair(10)"></i>
                            </span>                            
                            <input v-model="fairness" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="description" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ description_title }}
                            <span v-if="description===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="description===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="description===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="desc(1)"></i><i class="far fa-star" @click="desc(2)"></i><i class="far fa-star" @click="desc(3)"></i><i class="far fa-star" @click="desc(4)"></i><i class="far fa-star" @click="desc(5)"></i><i class="far fa-star" @click="desc(6)"></i><i class="far fa-star" @click="desc(7)"></i><i class="far fa-star" @click="desc(8)"></i><i class="far fa-star" @click="desc(9)"></i><i class="far fa-star" @click="desc(10)"></i>
                            </span>                            
                            <input v-model="description" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="utility" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ utility_title }}
                            <span v-if="utility===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="utility===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="utility===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="util(1)"></i><i class="far fa-star" @click="util(2)"></i><i class="far fa-star" @click="util(3)"></i><i class="far fa-star" @click="util(4)"></i><i class="far fa-star" @click="util(5)"></i><i class="far fa-star" @click="util(6)"></i><i class="far fa-star" @click="util(7)"></i><i class="far fa-star" @click="util(8)"></i><i class="far fa-star" @click="util(9)"></i><i class="far fa-star" @click="util(10)"></i>
                            </span>                            
                            <input v-model="utility" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="satisfied" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ satisfied_title }}
                            <span v-if="satisfied===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="satisfied===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="satisfied===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="satis(1)"></i><i class="far fa-star" @click="satis(2)"></i><i class="far fa-star" @click="satis(3)"></i><i class="far fa-star" @click="satis(4)"></i><i class="far fa-star" @click="satis(5)"></i><i class="far fa-star" @click="satis(6)"></i><i class="far fa-star" @click="satis(7)"></i><i class="far fa-star" @click="satis(8)"></i><i class="far fa-star" @click="satis(9)"></i><i class="far fa-star" @click="satis(10)"></i>
                            </span>                            
                            <input v-model="satisfied" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">
                        <ValidationProvider name="honesty" rules="required" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <span class="form-control">
                            {{ honesty_title }}
                            <span v-if="honesty===1">
                              <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>                              
                            </span>
                            <span v-else-if="honesty===2">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===3">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===4">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===5">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===6">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===7">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===8">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===9">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span v-else-if="honesty===10">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </span>
                            <span v-else>
                              <i class="far fa-star" @click="hones(1)"></i><i class="far fa-star" @click="hones(2)"></i><i class="far fa-star" @click="hones(3)"></i><i class="far fa-star" @click="hones(4)"></i><i class="far fa-star" @click="hones(5)"></i><i class="far fa-star" @click="hones(6)"></i><i class="far fa-star" @click="hones(7)"></i><i class="far fa-star" @click="hones(8)"></i><i class="far fa-star" @click="hones(9)"></i><i class="far fa-star" @click="hones(10)"></i>
                            </span>                            
                            <input v-model="honesty" type="hidden">
                          </span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col">                    
                        <ValidationProvider name="comments" rules="required|max:249" v-slot="{ errors }">
                          <div class="input-group" >
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <textarea v-model="comments" placeholder="Comments About Your Partner" class="form-control"></textarea>
                            <span class="has-error">{{ errors[0] }}</span>
                          </div>
                        </ValidationProvider>
                      </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="confirm_finish_trade"><i class="fas fa-shopping-cart cursor" ></i> Confirm</button>
                    </div>
                  </div>
                </div>
              </div>            
          </div>
          <div v-else></div>          
          <div class="col" v-if="showPaybutton">
            <p class="text-right" v-if="stripe">
              <button type="button" class="btn btn-secondary" @click="checkout"><i class="fab fa-cc-stripe cursor" style="font-size:40px"></i><span class="stripe"> Pay </span></button>
              </p>
              <p class="text-right" v-else>
                <a :href="ProfileURL" type="button" class="btn btn-secondary"><i class="fab fa-cc-stripe cursor stripe"></i> <span class="stripe">Set Stripe in Profile</span></a>
              </p>                    
          </div> 
          <div v-else></div>

        </div>
      </div>                           
    </div>

 
    <div class="modal" id="ProposeExchange">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i class="fas fa-shopping-cart cursor" ></i> Propose an Exchange</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col">
                <ValidationProvider name="exchangeitemname" rules="required|max:249" v-slot="{ errors }">
                  <div class="input-group" >
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <input v-model="exchangeitemname" type="text" class="form-control" name="exchangeitemname" @keydown="onInputExcChange" placeholder="Name">
                    <span class="has-error">{{ errors[0] }}</span>
                  </div>
                </ValidationProvider>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col">
                <ValidationProvider name="exchangecategory" rules="required" v-slot="{ errors }">
                  <div class="input-group" >
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-tag"></i></span>
                    </div>
                    <select v-model="exchangecategory" class="form-control" name="exchangecategory" @change="Exchchoose()">
                      <option value="" >Choose One Category</option>
                      <option v-for="option in ExchCategoryData" v-bind:value="option.id">
                        {{ option.name }}
                      </option>
                    </select>
                    <span class="has-error">{{ errors[0] }}</span>
                  </div>
                </ValidationProvider>
              </div>
            </div>                    
            <div class="row justify-content-center" v-if="show_e_amount">
              <div class="col">
                <ValidationProvider name="exchangeamount" rules="double" v-slot="{ errors }">
                  <div class="input-group" >
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                    </div>
                    <input v-model="exchangeamount" type="text" class="form-control" name="exchangeamount" @change="SetExchDecimal()" placeholder="Amount">
                    <span class="has-error">{{ errors[0] }}</span>
                  </div>
                </ValidationProvider>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col">
                <ValidationProvider name="exchangedescription" rules="required|max:249" v-slot="{ errors }">
                  <div class="input-group" >
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-tags"></i></span>
                    </div>
                    <textarea v-model="exchangedescription" type="text" class="form-control" name="exchangedescription" placeholder="Description"></textarea>
                    <span class="has-error">{{ errors[0] }}</span>
                  </div>
                </ValidationProvider>
              </div>
            </div>  
            <div class="row justify-content-center">
              <div class="col">
                <excimage-component :type-value="2" :edit-value="0"></excimage-component>
                <ValidationProvider name="upload2" rules="required" v-slot="{ errors }">
                  <input v-model="upload2" type="hidden" class="form-control" name="upload2">
                  <span class="has-error">{{ errors[0] }}</span>
                </ValidationProvider>                         
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill mt-5" @click="SaveItem" data-dismiss="modal" :disabled="invalid">Save Item</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card" v-if='partner'>
            <div class="card-header"><div class="row"><div class="col"><p class="text-left"><h5 class="card-title"><i class="fas fa-user-tag"></i> About Partner</h5></p></div><div class="col"><p class="text-right">
              <a :href="PartnerURL">
        <p class="card-stars">
          <span v-if="PartnerQ===1">
          <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===2">
          <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===3">
          <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===6">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===7">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===8">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===9">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
        </span>
        <span v-else-if="PartnerQ===10">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span v-else>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        </p>              
              </a></p></div></div></div>
            <div class="card-body">
                <p class="card-text">Name: {{ PartnerName }} </p>
                <p class="card-text">Email: {{ PartnerEmail }} </p>
                <p class="card-text">Phone: {{ PartnerPhone }} </p>
            </div>
            <messages-component :product-value="ProductValue" :proposal-value="ProposalValue"></messages-component>
            </div>
    <div class="card" v-else-if="showHostUser">
            <div class="card-header"><div class="row"><div class="col"><p class="text-left"><h5 class="card-title"><i class="fas fa-user-tag"></i> About Partner</h5></p></div><div class="col"><p class="text-right">
              <a :href="HostUserURL">
        <p class="card-stars">
          <span v-if="PartnerQ===1">
          <i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===2">
          <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===3">
          <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===6">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===7">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===8">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </span>
        <span v-else-if="PartnerQ===9">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
        </span>
        <span v-else-if="PartnerQ===10">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </span>
        <span v-else>
          <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </span>
        </p>              
              </a></p></div></div></div>
            <div class="card-body">
                <p class="card-text">Name: {{ HostUserName }} </p>
                <p class="card-text">Email: {{ HostUserEmail }} </p>
                <p class="card-text">Phone: {{ HostUserPhone }} </p>
            </div>
            <messages-component :product-value="ProductValue" :proposal-value="ProposalValue"></messages-component>
            </div>
            <div v-else>
            </div>            
            
          </div>    
  </ValidationObserver>   
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
import Datepicker from 'vuejs-datepicker';
import ExcimageComponent from "../ExcimageComponent.vue";
Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule]);
});

// with typescript
for (let [rule, validation] of Object.entries(rules)) {
  extend(rule, {
    ...validation
  });
}
// No message specified.
extend('email', email);

// Override the default message.
extend('confirmed', {
  ...confirmed,
  message: 'The value does not match'
});
extend('required', {
  ...required,
  message: 'This field is required'
});
export default {
  components: {
    ValidationObserver,
    ValidationProvider,
    Datepicker,
    ExcimageComponent,
  },
  data() {
    return {
          exchange:false,
          exchangeitemname:'',
          exchangeamount: '',
          exchangedescription: '',
          exchangecategory: '',
          exchangetype:'',
          GetECategories:'',
          GetESubCategories:'',
          show_e_amount: false,
          ExchCategoryData:'',
          upload2:'',                           
          product_id: '',
          category_id: '',
          name: '',
          description: '',
          type_id: '',
          amount: '',
          exchproduct_id: '',
          exchcategory_id: '',
          exchname: '',
          exchdescription: '',
          exchtype_id: '',
          exchamount: '',          
          tradde_number: '',
          status: '',
          image_url: '',
          exchimage_url:'',
          username: '',
          email: '',
          phone: '',
          category: '',
          exchcategory:'',
          values: '',
          HomeUrl: localStorage['URLroot'],
          logged: false,
          like: true,
          Getlike: '',
          GetExchange:'',
          exchange_id:'',
          show_accept: '',
          show_like: false,
          host_user_id:'',
          target_user_id:'',
          current_user_id:'',
          starting_at:'',
          date:'',
          success:'',
          Show_Button: '',
          finished:false,
          qualify:0,
          tradde_id:'',
          comments:'',
          accept_trade: false,
          finish_trd_s: false,
          finish_trd_t: false,
          paybutton: false,
          fairness: '0',
          description: '0',
          utility: '0',
          satisfied: '0',
          honesty: '0',
          fairness_title: '',
          description_title: '',
          utility_title: '',
          satisfied_title: '',
          honesty_title: '',
          stripe:false,
          ProfileURL:localStorage['URLroot'] + '/profile',
          stripeHandler: null,
          PartnerName:'',
          PartnerEmail:'',
          PartnerPhone:'',
          HostUserName:'',
          HostUserEmail:'',
          HostUserPhone:'',
          HostUserURL:'',
          PartnerQ:'',
          PartnerURL: '',
          showHostUser:false,
          showSendPropose: false,
          IsSaved:'',
          showMyProposal:false,
          partner:false,
          pr_name:'',
          pr_desc:'',
          pr_image:'',
          pr_cat:'',
          pr_amount:'',
          ProposalValue:'',
          showAllProposals:false,
          showCancel:false,
          showFinish:false,
          showPaybutton:false,
          showConfirm: false,
      }
    },
    props: [
            'ProductValue',
          ],
    methods: {
      SetExchDecimal(){
        let am = this.exchangeamount;
        let index=am.indexOf(".");
        if(index<0){
          am=am + '.00';
        }
        this.exchangeamount=am;
      },
      SetExchType(response){
        this.exchangetype = response.id;
        if(response.id=='1331'){
          this.show_e_amount=true;
        }
        else{
          this.show_e_amount=false;
        }
      },
      getExchType(response){
        console.log(response);
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + response.id).then(response => (this.SetExchType(response.data)));
      },
      Exchchoose(){
        axios.get( localStorage['URLroot'] + '/categories/getparent/' + this.exchangecategory).then(response => (this.getExchType(response.data)));
      },
      onInputExcChange(){
        if(this.exchangeitemname.length>2) {
          axios.get( localStorage['URLroot'] + '/categories/search/' + this.exchangeitemname).then(response => (this.ExchCategoryData = response.data));
        }
      },
      SaveItem(){
        axios.post( localStorage['URLroot'] + '/trade/propose' ,
        {
          csrfToken: myToken.csrfToken,
          exchangetype: this.exchangetype,          
          exchangeitemname:this.exchangeitemname,
          exchangeamount: this.exchangeamount,
          exchangedescription: this.exchangedescription,
          exchangecategory: this.exchangecategory,
          tradde_id: this.tradde_id          
        }
        ).then(response => (this.IsSaved = response.data));
        this.showSuccess();
      },
      showSuccess(){
          this.success=true;
          setTimeout(() => {
            location.reload();
          },6000);        
      },      
      IsEUploaded(response){
        if(response.count>0){
          this.upload2=response.count;
        }
        else{
          this.upload2='';
        }
      },
      startInterval() {
        setInterval(() => {
          axios.get(localStorage['URLroot'] + '/IsUploaded/' + 2).then(response => (this.IsEUploaded(response.data)));
        }, 2000)
      },      
        qual(value){
          this.qualify=value;
        },
        fair(value){
          this.fairness=value;
        },
        desc(value){
          this.description=value;
        },
        util(value){
          this.utility=value;
        },
        hones(value){
          this.honesty=value;
        }, 
        satis(value){
          this.satisfied=value;
        },       
        finish_trade(){
          axios.post( localStorage['URLroot'] + '/trade/finish',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              fairness: this.fairness,
              description: this.description,
              utility: this.utility,
              satisfied: this.satisfied,
              honesty: this.honesty,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },
        confirm_finish_trade(){
          axios.post( localStorage['URLroot'] + '/trade/confirm',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              fairness: this.fairness,
              description: this.description,
              utility: this.utility,
              satisfied: this.satisfied,
              honesty: this.honesty,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          location.href = localStorage['URLroot'] + '/dashboard';
        },
        cancel_trade(){
          axios.post( localStorage['URLroot'] + '/trade/cancel',
            {
              csrfToken: myToken.csrfToken,
              tradde_id: this.tradde_id,
              fairness: this.fairness,
              description: this.description,
              utility: this.utility,
              satisfied: this.satisfied,
              honesty: this.honesty,
              comments: this.comments
            }
          ).then(response => (this.success = response.data));
          //location.reload();
        },
        likeItem(){
          axios.post( localStorage['URLroot'] + '/like',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.product_id
            }
          ).then(response => (this.ChkCode = response.data));
          axios.get( localStorage['URLroot'] + '/GetLike/' + this.ProductValue).then(response => (this.Getlike = response.data));
          this.like=false;
        },
        addtoCart(){
          alert(this.sell_id);
        },
        EditRegister(){
           this.disabled=false;
           this.showedit=false;
           this.showsave=true; 
        },
        GetExchangeValues(response){
            this.exchproduct_id=response.id;
            this.exchcategory_id=response.category_id;
            this.exchname=response.name;
            this.exchdescription=response.description;
            this.exchtype_id=response.type_id;
            this.exchamount=response.amount;
            this.exchimage_url=response.image_url;
            this.exchcategory=response.category;
            axios.get( localStorage['URLroot'] + '/AcceptedProposal/' + this.tradde_id).then(response => (this.ProposalValue=response.data.id));
            let current=parseInt(this.current_user_id);
            let host=parseInt(this.host_user_id);
            let target=parseInt(this.target_user_id);
            let st=parseInt(this.status);
            switch(current){
              case host:
                switch(st){
                  case 2:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=true;
                    this.exchange=true;
                    this.getPartner(1);
                  break;
                  case 4:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=false;
                    this.showConfirm=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                  break;
                  case 6:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                  break;
                  case 7:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(1);
                    this.showConfirm=true;
                  break;
                  case 8:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(1);
                    this.showConfirm=false;
                  break;                 
                  default:
                  break;
                }              
              break;
              case target:
                switch(st){
                  case 2:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=true;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(2);
                  break;
                  case 4:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showCancel=false;
                    this.showConfirm=false;
                    this.exchange=true;
                    this.getPartner(1);
                    this.SetTitles(2);
                  break;                
                  case 6:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=true;
                    this.exchange=true;
                    this.getPartner(2);
                    this.SetTitles(2);
                  break;
                  case 7:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.showConfirm=false;
                    this.SetTitles(2);
                  break;
                  case 8:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=true;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=true;
                    this.getPartner(2);
                    this.showConfirm=false;
                    this.SetTitles(2);
                  break;                                 
                  default:
                  break;
                }              
              break;
              default:
                    this.show_like= false;
                    this.showSendPropose=false;
                    this.showAllProposals=false;
                    this.partner=false;
                    this.showHostUser=false;
                    this.showFinish=false;
                    this.exchange=false;
                    this.showConfirm=false;
              break;
            }
        },
        Getuser(response){
          let stripe_id=response.stripe_id;
            if(!stripe_id){
              this.stripe=false;
            }
            else{
              this.stripe=true;
            }
            this.current_user_id=response.id;
            let st=parseInt(this.status);
            if(this.host_user_id==this.current_user_id){
              switch(st){
                case 1:
                  this.show_like= false;
                  this.showSendPropose=false;
                  this.showAllProposals=true;
                  this.partner=false;
                  this.showHostUser=false;
                break;
                case 2:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 4:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 6:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 7:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 8:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                 
                default:
                break;
              }
            }
            else{
              switch(st){
                case 1:
                  this.show_like= true;
                  this.partner=false;
                  this.showHostUser=true;
                  axios.get( localStorage['URLroot'] + '/GetQualify/' + this.host_user_id).then(response => (this.SetPartnerQ(response.data)));
                  axios.get( localStorage['URLroot'] + '/CountProposal/' + this.tradde_id).then(response => (this.SetOneProporsal(response.data)));
                break;
                case 2:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 4:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                
                case 6:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 7:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;
                case 8:
                  axios.get( localStorage['URLroot'] + '/getexchproduct/' + this.exchange_id).then(response => (this.GetExchangeValues(response.data)));
                break;                                 
                default:
                break;
              }
            }             
        },
        SetOneProporsal(response){
          let count=parseInt(response);
          if(count>0){
            this.showSendPropose=false;
            axios.get( localStorage['URLroot'] + '/GetProposal/' + this.tradde_id).then(response => (this.GetProposal(response.data)));
          }
          else{
            this.showSendPropose=true;
          }
        },
        GetProposal(response){
          this.ProposalValue=response.id;
          this.pr_name=response.name;
          this.pr_desc=response.description;
          this.pr_image=response.image_url;
          this.pr_cat=response.category;
          this.pr_amount=response.amount;
          this.showMyProposal=true;
        },
        GetValues(response){
            this.product_id=response.product_id;
            this.category_id=response.category_id;
            this.name=response.name;
            this.description=response.description;
            this.type_id=response.type_id;
            this.amount=response.amount;
            this.tradde_number=response.tradde_number;
            this.host_user_id=response.host_user_id;
            this.target_user_id=response.target_user_id;
            this.tradde_id=response.tradde_id;
            this.status=response.status;
            this.image_url=response.image_url;
            this.username=response.username;
            this.email=response.email;
            this.phone=response.phone;
            this.category=response.category;
            this.HostUserName=response.username;
            this.HostUserEmail=response.email;
            this.HostUserPhone=response.phone;
            this.exchange_id=response.exchange_id;
            this.HostUserURL=localStorage['URLroot'] + '/user/show/' + response.host_user_id;             
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser(response.data)));          
        },
        SetConfirmed(response){
          let resp=JSON.stringify(response).length;
          let st=parseInt(this.status);
          if(resp<3){
            if(st==4){
              this.finished=true;
            }
            if(st==3){
              this.finished=true;
            }            
          }
        },
        SetPartnerQ(response){
          let q=parseInt(response);
          this.PartnerQ=q;
        },
        SetPartner(response){
          this.PartnerName=response.name;
          this.PartnerEmail=response.email;
          this.PartnerPhone=response.phone;
          this.PartnerURL=localStorage['URLroot'] + '/user/show/' + response.user_id;
        },
        getPartner(value){
          if(value==1){
            axios.get( localStorage['URLroot'] + '/GetTrader/' + this.target_user_id).then(response => (this.SetPartner(response.data)));
            axios.get( localStorage['URLroot'] + '/GetQualify/' + this.target_user_id).then(response => (this.SetPartnerQ(response.data)));
          }
          else{
            axios.get( localStorage['URLroot'] + '/GetTrader/' + this.host_user_id).then(response => (this.SetPartner(response.data))); 
            axios.get( localStorage['URLroot'] + '/GetQualify/' + this.host_user_id).then(response => (this.SetPartnerQ(response.data))); 
          }
        },
        SetTitles(value){
          let srctype=parseInt(this.type_id);
          let srctypee=parseInt(this.exchtype_id);
          if(value==1){
            this.getPartner(1);
            switch(srctype){
              case 1331:
                this.fairness_title= 'Product Value Fairness';
                this.description_title= 'Description Photos vs Actual';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
              break;
              case 1329:
                this.fairness_title= 'Service Value Fairness';
                this.description_title= 'Service Offer vs Delivered';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
              break;
              case 1330:
                this.fairness_title= 'Skills Value Fairness';
                this.description_title= 'Skills Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
              break;
              case 1796:
                this.fairness_title= 'Fairness';
                this.description_title= 'Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';              
                this.showPaybutton=false;                  
              break;
              default:
              break;
            }
          }
          else{
            this.getPartner(2);
            switch(srctypee){
              case 1331:
                this.fairness_title= 'Product Value Fairness';
                this.description_title= 'Description Photos vs Actual';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
                break;
              case 1329:
                this.fairness_title= 'Service Value Fairness';
                this.description_title= 'Service Offer vs Delivered';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
                break;
              case 1330:
                this.fairness_title= 'Skills Value Fairness';
                this.description_title= 'Skills Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                this.showPaybutton=false;
                break;
              case 1796:
                if(parseInt(this.status)==2){
                  alert(value);
                  this.fairness_title= 'Fairness';
                  this.description_title= 'Offer vs Delivery';
                  this.utility_title= 'Value vs Utility';
                  this.satisfied_title= 'Satisfied with Trade';
                  this.honesty_title= 'Honesty Level';
                  this.showPaybutton=true;
                }
                else{
                  this.showPaybutton=false;
                }
                break;
              default:
              break;
            }
          }
        },
        customFormatter(date) {
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
        includeStripe( URL, callback ){
                let documentTag = document, tag = 'script',
                    object = documentTag.createElement(tag),
                    scriptTag = documentTag.getElementsByTagName(tag)[0];
                object.src = '//' + URL;
                if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
                scriptTag.parentNode.insertBefore(object, scriptTag);
        },        
        initStripe() {
                this.stripeHandler = StripeCheckout.configure({
                    key: 'pk_test_51I6rk8IwloEcEGxLuFCGtGeMMBrieDxwLTx2qzxy2zFP8RtMtR4Oh8TMDafevEJpOfXEPUJQoLZn6YBCREwUIZLr00FC0zH1yN',
                    image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                    locale: 'auto',
                    zipCode: true,
                    token: (token) => {
                        //showLoader();
                        console.log(token);
                        axios.post( localStorage['URLroot'] + '/stripe/getpayment/' + this.tradde_id, token)
                            .then(response => {
                                window.scrollTo(0,0);
                                console.log(response);
                            })
                            .catch(error => {
                                console.log(error.response);
                            });
                        location.reload();
                    }
                });
                window.addEventListener('popstate', () => {
                    this.stripeHandler.close();
                });
        },
        checkout() {
                this.stripeHandler.open({
                    name: 'Index Ladder',
                    image: '/images/marker.png',
                    description: '',
                    amount:  parseInt(this.amount)*100
                });
                event.preventDefault();
        },
    },
    mounted() {
            axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));      
            axios.get( localStorage['URLroot'] + '/GetLike/'+ this.ProductValue).then(response => (this.Getlike = response.data));
            axios.post( localStorage['URLroot'] + '/notifications/SetView',
            {
              csrfToken: myToken.csrfToken,
              product_id: this.ProductValue
            }
          ).then(response => (console.log(response.data)));
          this.includeStripe('js.stripe.com/v3/', function(){
                this.initStripe();
          }.bind(this) );
            
    }     
}
</script>