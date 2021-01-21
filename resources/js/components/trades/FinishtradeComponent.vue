<template>
  <ValidationObserver v-slot="{ invalid }">
          <div class="col">
            <p class="text-right">
          <button type="button" data-toggle="modal" data-target="#myFinish" class="btn btn-secondary"><i class="fas fa-shopping-cart cursor" ></i> {{ text_button }}</button>        
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
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="qualify_trade"><i class="fas fa-shopping-cart cursor" ></i>Finish</button>
                    </div>
                  </div>
                </div>
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
  },        
  data() {
    return {
      fairness: 0,
      description: 0,
      utility: 0,
      satisfied: 0,
      honesty: 0,
      fairness_title: '',
      description_title: '',
      utility_title: '',
      satisfied_title: '',
      honesty_title: '',
      host_user_id:'',
      target_user_id:'',
      status: '',
      qualify:0,
      tradde_id:'',
      type_id: '',
      amount: '',
      tradde_number: '',
      host_user_id: '',
      target_user_id: '',
      exchange_id: '',
      current_user_id:'',
      exchproduct_id: '',
      exchtype_id: '',
      ProposalValue:'',
      text_button:'',
      comments:'',
    };
  },
  props: [
    'ProductValue',
    'FinishValue',
  ],
  methods: {
        qual(value){
          this.qualify=parseInt(value);
        },
        fair(value){
          this.fairness=parseInt(value);
        },
        desc(value){
          this.description=parseInt(value);
        },
        util(value){
          this.utility=parseInt(value);
        },
        hones(value){
          this.honesty=parseInt(value);
        }, 
        satis(value){
          this.satisfied=parseInt(value);
        },
        qualify_trade(){
          let fv= parseInt(this.FinishValue);
          switch (fv){
            case 1:
              this.cancel_trade();
            break;
            case 2:
              this.finish_trade();
            break;
            case 3:
              this.confirm_finish_trade();
            break;
            default:
            break;
          }
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
          location.reload();
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
          location.reload();
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
          location.reload();
        },
        GetValues(response){
            this.type_id=response.type_id;
            this.tradde_number=response.tradde_number;
            this.host_user_id=response.host_user_id;
            this.target_user_id=response.target_user_id;
            this.tradde_id=response.tradde_id;
            this.status=response.status;
            this.exchange_id=response.exchange_id;
            axios.get( localStorage['URLroot'] + '/profile/GetUserInfo').then(response => (this.Getuser(response.data)));
        },
        Getuser(response){
            this.current_user_id=response.id;
            let st=parseInt(this.status);
            if(this.host_user_id==this.current_user_id){
              switch(st){
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
        GetExchangeValues(response){
            this.exchproduct_id=response.id;
            this.exchtype_id=response.type_id;
            this.exchamount=response.amount;
            axios.get( localStorage['URLroot'] + '/AcceptedProposal/' + this.tradde_id).then(response => (this.ProposalValue=response.data.id));
            let current=parseInt(this.current_user_id);
            let host=parseInt(this.host_user_id);
            let target=parseInt(this.target_user_id);
            let st=parseInt(this.status);
            switch(current){
              case host:
                switch(st){
                  case 4:
                    this.SetTitles(1);
                  break;
                  case 6:
                    this.SetTitles(1);
                  break;
                  case 7:
                    this.SetTitles(1);
                  break;
                  case 8:
                    this.SetTitles(1);
                  break;                 
                  default:
                  break;
                }              
              break;
              case target:
                switch(st){
                  case 2:
                    this.SetTitles(2);
                  break;
                  case 4:
                    this.SetTitles(2);
                  break;                
                  case 6:
                    this.SetTitles(2);
                  break;
                  case 7:
                    this.SetTitles(2);
                  break;
                  case 8:
                    this.SetTitles(2);
                  break;                                 
                  default:
                  break;
                }              
              break;
              default:
              break;
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
              break;
              case 1329:
                this.fairness_title= 'Service Value Fairness';
                this.description_title= 'Service Offer vs Delivered';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
              break;
              case 1330:
                this.fairness_title= 'Skills Value Fairness';
                this.description_title= 'Skills Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
              break;
              case 1796:
                this.fairness_title= 'Fairness';
                this.description_title= 'Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';              
              break;
              default:
              break;
            }
          }
          else{
            switch(srctypee){
              case 1331:
                this.fairness_title= 'Product Value Fairness';
                this.description_title= 'Description Photos vs Actual';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                break;
              case 1329:
                this.fairness_title= 'Service Value Fairness';
                this.description_title= 'Service Offer vs Delivered';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                break;
              case 1330:
                this.fairness_title= 'Skills Value Fairness';
                this.description_title= 'Skills Offer vs Delivery';
                this.utility_title= 'Value vs Utility';
                this.satisfied_title= 'Satisfied with Trade';
                this.honesty_title= 'Honesty Level';
                break;
              case 1796:
                if(parseInt(this.status)==2){
                  this.fairness_title= 'Fairness';
                  this.description_title= 'Offer vs Delivery';
                  this.utility_title= 'Value vs Utility';
                  this.satisfied_title= 'Satisfied with Trade';
                  this.honesty_title= 'Honesty Level';
                }
                break;
              default:
              break;
            }
          }
        },
    ShowButton(){
      let fv= parseInt(this.FinishValue);
      switch (fv){
        case 1:
          this.text_button='Cancel Trade';
        break;
        case 2:
          this.text_button='Finish Trade';
        break;
        case 3:
          this.text_button='Confirm Trade Finished';
        break;
        default:
        break;
      }      
    }    
  },
  mounted() {
    axios.get( localStorage['URLroot'] + '/getproduct/' + this.ProductValue).then(response => (this.GetValues(response.data)));
    this.ShowButton(); 
  },        
}
</script>