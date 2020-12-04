<template>
    <div class="container">
      <div class="row">
        <div class="col-lg-2">  
            <div class="list-group">
            <h4><span class="categorieslink"> Choose your favorites categories</span></h4>
              <p class="pcategory"><span data-target="#products_categories" class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnProp===false" @click="ChangeBoxProp"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxProp"></i> Products</span></p>
              <div id="products_categories" class="collapse">
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1332" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1332===false" @click="ChangeBox1332"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1332"></i> Womens</span></p>
                <div id="subcategory1332" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1332">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1333" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1333===false" @click="ChangeBox1333"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1333"></i> Pcs, Cell phones, Notebooks, Games</span></p>
                <div id="subcategory1333" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1333">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1334" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1334===false" @click="ChangeBox1334"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1334"></i> Automotives & tools</span></p>
                <div id="subcategory1334" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1334">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1335" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1335===false" @click="ChangeBox1335"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1335"></i> Consumer Electronics</span></p>
                <div id="subcategory1335" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1335">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1336" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1336===false" @click="ChangeBox1336"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1336"></i> Mens</span></p>
                <div id="subcategory1336" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1336">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1337" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1337===false" @click="ChangeBox1337"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1337"></i> Home</span></p>
                <div id="subcategory1337" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1337">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1338" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1338===false" @click="ChangeBox1338"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1338"></i> Kids</span></p>
                <div id="subcategory1338" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1338">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1339"class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1339===false" @click="ChangeBox1339"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1339"></i> Sports and Travels</span></p>
                <div id="subcategory1339" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1339">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1340"class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1340===false" @click="ChangeBox1340"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1340"></i>Office</span></p>
                <div id="subcategory1340" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1340">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>         
              </div>
              <p class="pcategory"><span data-target="#services_categories" class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnServ===false" @click="ChangeBoxServ"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxServ"></i> Services</span></p>
              <div id="services_categories" class="collapse">
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1===false" @click="ChangeBox1"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1"></i> Some agricultural services (including landscaping and horticulture)</span></p>
                <div id="subcategory1" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor1">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory2" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn2===false" @click="ChangeBox2"></i><i class="fas fa-minus-square" v-else @click="ChangeBox2"></i> Hotels and other places of lodging</span></p>
                <div id="subcategory2" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor2">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory3" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn3===false" @click="ChangeBox3"></i><i class="fas fa-minus-square" v-else @click="ChangeBox3"></i> Personal services (including dry cleaning, tax preparation, and hair cutting)</span></p>
                <div id="subcategory3" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor3">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory4" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn4===false" @click="ChangeBox4"></i><i class="fas fa-minus-square" v-else @click="ChangeBox4"></i> Business services (including temporary agencies and business software developers)</span></p>
                <div id="subcategory4" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor4">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory5" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn5===false" @click="ChangeBox5"></i><i class="fas fa-minus-square" v-else @click="ChangeBox5"></i> Automotive services</span></p>
                <div id="subcategory5" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor5">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory6" class="categorieslink"> <i class="fas fa-plus-square" v-if="ClickOn6===false" @click="ChangeBox6"></i><i class="fas fa-minus-square" v-else @click="ChangeBox6"></i> Miscellaneous repairs</span></p>
                <div id="subcategory6" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor6">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory7" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn7===false" @click="ChangeBox7"></i><i class="fas fa-minus-square" v-else @click="ChangeBox7"></i> Motion pictures</span></p>
                <div id="subcategory7" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor7">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory8" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn8===false" @click="ChangeBox8"></i><i class="fas fa-minus-square" v-else @click="ChangeBox8"></i> Amusements and recreation</span></p>
                <div id="subcategory8" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor8">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory9" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn9===false" @click="ChangeBox9"></i><i class="fas fa-minus-square" v-else @click="ChangeBox9"></i> Healthcare</span></p>
                <div id="subcategory9" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor9">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory10" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn10===false" @click="ChangeBox10"></i><i class="fas fa-minus-square" v-else @click="ChangeBox10"></i> Legal services</span></p>
                <div id="subcategory10" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor10">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory11" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn11===false" @click="ChangeBox11"></i><i class="fas fa-minus-square" v-else @click="ChangeBox11"></i> Private education</span></p>
                <div id="subcategory11" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor11">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory12" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn12===false" @click="ChangeBox12"></i><i class="fas fa-minus-square" v-else @click="ChangeBox12"></i> Social services</span></p>
                <div id="subcategory12" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor12">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory13" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn13===false" @click="ChangeBox13"></i><i class="fas fa-minus-square" v-else @click="ChangeBox13"></i> Museums, zoos, and botanical gardens</span></p>
                <div id="subcategory13" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor13">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory14" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn14===false" @click="ChangeBox14"></i><i class="fas fa-minus-square" v-else @click="ChangeBox14"></i> Membership organizations (including houses of worship and clubs)</span></p>
                <div id="subcategory14" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor14">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory15" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn15===false" @click="ChangeBox15"></i><i class="fas fa-minus-square" v-else @click="ChangeBox15"></i>Engineering and management services (including consulting)</span></p>
                <div id="subcategory15" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor15">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
                 <p class="pcategory"><span data-toggle="collapse" data-target="#subcategory16" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn16===false" @click="ChangeBox16"></i><i class="fas fa-minus-square" v-else @click="ChangeBox16"></i> Other miscellaneous services</span></p>
                <div id="subcategory16" class="collapse">
                   <div class="pad-left" v-for="item in ValuesFor16">
                    <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
                       <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
                       <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
                   </div>
                </div>
              </div>   
              <p class="pcategory"><span data-target="#skills_categories"  class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnSkill===false" @click="ChangeBoxSkill"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxSkill"></i> Skills</span></p>
              <div id="skills_categories" class="collapse">
                <div class="pad-left" v-for="categoryskill in valuesski">
                  <p class="pcategory"><span :data-target="'#' + categoryskill.id" class="categorieslink" data-toggle="collapse" >
                  <i class="far fa-check-square" @click="SelectCategory(categoryskill.id)" v-if="selectedCategory.includes(categoryskill.id)"></i>
                  <i class="far fa-square cursor" @click="SelectCategory(categoryskill.id)" v-else></i>
                   {{ categoryskill.name }}</span></p>
                  <div :id="categoryskill.id" class="collapse">
                    <p class="pcategory"><i class="far fa-square cursor"></i> Sub Category1</p>    
                    <p class="pcategory"><i class="far fa-square cursor"></i> Sub Category1</p>
                  </div>
                </div>
              </div>       
            </div>
          </div>
          <div class="col-lg-10">
          <div class="row align-items-center">
            <div class="col">
              <div class="card">
                <div class="card-header"><h5 class="card-title"><i class="fas fa-tags"></i> Your categories</h5></div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                          <thead>
                            <tr>
                              <th>Category</th>
                              <th>Options</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="item in ValuesForLikes" >
                              <td>{{ item.name }}</td>
                              <td><span class="categorieslink"><i class="fas fa-trash-alt" @click="delete_category(item.id)"></i></span></td>
                            </tr>
                          </tbody>
                        </table>
                       </div>                      
                  </div>
              </div>              
            </div>
            </div>
            <div class="row align-items-center">
            <div class="col">
              <div class="card">
                <div class="card-header"><h5 class="card-title"><i class="fas fa-users"></i> Recomended users to follow</h5></div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-3" v-for="user in ValuesForUsers">
                    <div class="card">
                      <div class="card-header">{{ user.username }}</div>
                      <div class="card-body">Content</div>
                      <div class="card-footer"><button type="button" class="btn btn-secondary rounded-pill "><i class="fas fa-user-check"></i> Follow</button></div>
                    </div>
                    </div>
                    </div>
                  </div>
              </div>               
            </div>            
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    components: {
    },    
    data() {
        return {
        ValuesFor1332: null,
        ValuesFor1333: null,
        ValuesFor1334: null,
        ValuesFor1335: null,
        ValuesFor1336: null,
        ValuesFor1337: null,
        ValuesFor1338: null,
        ValuesFor1339: null,
        ValuesFor1340: null,
        ValuesFor1: null,
        ValuesFor2: null,
        ValuesFor3: null,
        ValuesFor4: null,
        ValuesFor5: null,
        ValuesFor6: null,
        ValuesFor7: null,
        ValuesFor8: null,
        ValuesFor9: null,
        ValuesFor10: null,
        ValuesFor11: null,
        ValuesFor12: null,
        ValuesFor13: null,
        ValuesFor14: null,
        ValuesFor15: null,
        ValuesFor16: null,
        Get1332: 1332,
        Get1333: 1333,
        Get1334: 1334,
        Get1335: 1335,
        Get1336: 1336,
        Get1337: 1337,
        Get1338: 1338,
        Get1339: 1339,
        Get1340: 1340,
        Get1: 1,
        Get2: 2,
        Get3: 3,
        Get4: 4,
        Get5: 5,
        Get6: 6,
        Get7: 7,
        Get8: 8,
        Get9: 9,
        Get10: 10,
        Get11: 11,
        Get12: 12,
        Get13: 13,
        Get14: 14,
        Get15: 15,
        Get16: 16,
        catski: 257,
        ClickOnProp: false,
        ClickOnServ: false,
        ClickOnSkill: false,
        ClickOn1332: false,
        ClickOn1333: false,
        ClickOn1334: false,
        ClickOn1335: false,
        ClickOn1336: false,
        ClickOn1337: false,
        ClickOn1338: false,
        ClickOn1339: false,
        ClickOn1340: false,
        ClickOn1: false,
        ClickOn2: false,
        ClickOn3: false,
        ClickOn4: false,
        ClickOn5: false,
        ClickOn6: false,
        ClickOn7: false,
        ClickOn8: false,
        ClickOn9: false,
        ClickOn10: false,
        ClickOn11: false,
        ClickOn12: false,
        ClickOn13: false,
        ClickOn14: false,
        ClickOn15: false,
        ClickOn16: false,        
        valuesski: null,
        selectedCategory:[],
        contactos: {},
        findbyname:'', 
        items: '',
        ValuesForLikes:'',
        ValuesForUsers:'',
      }
    },
    methods: {   
      SelectCategory(categorypro){

          axios.post( localStorage['URLroot'] + '/categories/like',
            {
              csrfToken: myToken.csrfToken,
              category_id: categorypro
            }
          ).then(response => (this.UpdateValues(response.data)));
      },
      removeItemAll(arr, value) {
        var i = 0;
        while (i < arr.length) {
          if (arr[i] === value) {
            arr.splice(i, 1);
          } else {
            ++i;
          }
        }
        return arr;
      },
      SelectedValues(response){
        this.ValuesForLikes=response;
        let arr=[];     
        $.each(response, function(key, value) {
          arr.push(value.id);
        });
        this.selectedCategory=arr;
      },             
      UpdateValues(response){
        let arr=[];     
        $.each(response, function(key, value) {
          arr.push(value);
        });
        this.selectedCategory=arr;
        axios.get(localStorage['URLroot'] + '/categories/getlikes').then(response => (this.ValuesForLikes = response.data));
        axios.get(localStorage['URLroot'] + '/categories/getusers').then(response => (this.ValuesForUsers = response.data));        
      },
      ChangeBoxProp(){
        var status=this.ClickOnProp;
        if(status==true){ this.ClickOnProp=false; } else { this.ClickOnProp=true; }
      },
      ChangeBoxServ(){
        var status=this.ClickOnServ;
        if(status==true){ this.ClickOnServ=false; } else { this.ClickOnServ=true; }
      },
      ChangeBoxSkill(){
        var status=this.ClickOnSkill;
        if(status==true){ this.ClickOnSkill=false; } else { this.ClickOnSkill=true; }
      },        
      ChangeBox1332(){
        var status=this.ClickOn1332;
        if(status==true){ this.ClickOn1332=false; } else { this.ClickOn1332=true; }
      },
      ChangeBox1333(){
        var status=this.ClickOn1333;
        if(status==true){ this.ClickOn1333=false; } else { this.ClickOn1333=true; }
      },
      ChangeBox1334(){
        var status=this.ClickOn1334;
        if(status==true){ this.ClickOn1334=false; } else { this.ClickOn1334=true; }
      },
      ChangeBox1335(){
        var status=this.ClickOn1335;
        if(status==true){ this.ClickOn1335=false; } else { this.ClickOn1335=true; }
      },
      ChangeBox1336(){
        var status=this.ClickOn1336;
        if(status==true){ this.ClickOn1336=false; } else { this.ClickOn1336=true; }
      },
      ChangeBox1337(){
        var status=this.ClickOn1337;
        if(status==true){ this.ClickOn1337=false; } else { this.ClickOn1337=true; }
      },
      ChangeBox1338(){
        var status=this.ClickOn1338;
        if(status==true){ this.ClickOn1338=false; } else { this.ClickOn1338=true; }
      },
      ChangeBox1339(){
        var status=this.ClickOn1339;
        if(status==true){ this.ClickOn1339=false; } else { this.ClickOn1339=true; }
      },
      ChangeBox1340(){
        var status=this.ClickOn1340;
        if(status==true){ this.ClickOn1340=false; } else { this.ClickOn1340=true; }
      },
      ChangeBox1(){
        var status=this.ClickOn1;
        if(status==true){ this.ClickOn1=false; } else { this.ClickOn1=true; }
      },
      ChangeBox2(){
        var status=this.ClickOn2;
        if(status==true){ this.ClickOn2=false; } else { this.ClickOn2=true; }
      },
      ChangeBox3(){
        var status=this.ClickOn3;
        if(status==true){ this.ClickOn3=false; } else { this.ClickOn3=true; }
      },
      ChangeBox4(){
        var status=this.ClickOn4;
        if(status==true){ this.ClickOn4=false; } else { this.ClickOn4=true; }
      },
      ChangeBox5(){
        var status=this.ClickOn5;
        if(status==true){ this.ClickOn5=false; } else { this.ClickOn5=true; }
      },
      ChangeBox6(){
        var status=this.ClickOn6;
        if(status==true){ this.ClickOn6=false; } else { this.ClickOn6=true; }
      },
      ChangeBox7(){
        var status=this.ClickOn7;
        if(status==true){ this.ClickOn7=false; } else { this.ClickOn7=true; }
      },
      ChangeBox8(){
        var status=this.ClickOn8;
        if(status==true){ this.ClickOn8=false; } else { this.ClickOn8=true; }
      },
      ChangeBox9(){
        var status=this.ClickOn9;
        if(status==true){ this.ClickOn9=false; } else { this.ClickOn9=true; }
      },
      ChangeBox10(){
        var status=this.ClickOn10;
        if(status==true){ this.ClickOn10=false; } else { this.ClickOn10=true; }
      },
      ChangeBox11(){
        var status=this.ClickOn11;
        if(status==true){ this.ClickOn11=false; } else { this.ClickOn11=true; }
      },
      ChangeBox12(){
        var status=this.ClickOn12;
        if(status==true){ this.ClickOn12=false; } else { this.ClickOn12=true; }
      },
      ChangeBox13(){
        var status=this.ClickOn13;
        if(status==true){ this.ClickOn13=false; } else { this.ClickOn13=true; }
      },
      ChangeBox14(){
        var status=this.ClickOn14;
        if(status==true){ this.ClickOn14=false; } else { this.ClickOn14=true; }
      },
      ChangeBox15(){
        var status=this.ClickOn15;
        if(status==true){ this.ClickOn15=false; } else { this.ClickOn15=true; }
      },
      ChangeBox16(){
        var status=this.ClickOn16;
        if(status==true){ this.ClickOn16=false; } else { this.ClickOn16=true; }
      },

    },
    props: [  ],
    mounted() {
      var url = localStorage['URLroot'];
      axios.get(url + '/categories/getchilds/' + this.Get1332).then(response => (this.ValuesFor1332 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1333).then(response => (this.ValuesFor1333 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1334).then(response => (this.ValuesFor1334 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1335).then(response => (this.ValuesFor1335 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1336).then(response => (this.ValuesFor1336 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1337).then(response => (this.ValuesFor1337 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1338).then(response => (this.ValuesFor1338 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1339).then(response => (this.ValuesFor1339 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1340).then(response => (this.ValuesFor1340 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1).then(response => (this.ValuesFor1 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get2).then(response => (this.ValuesFor2 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get3).then(response => (this.ValuesFor3 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get4).then(response => (this.ValuesFor4 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get5).then(response => (this.ValuesFor5 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get6).then(response => (this.ValuesFor6 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get7).then(response => (this.ValuesFor7 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get8).then(response => (this.ValuesFor8 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get9).then(response => (this.ValuesFor9 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get10).then(response => (this.ValuesFor10 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get11).then(response => (this.ValuesFor11 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get12).then(response => (this.ValuesFor12 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get13).then(response => (this.ValuesFor13 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get14).then(response => (this.ValuesFor14 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get15).then(response => (this.ValuesFor15 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get16).then(response => (this.ValuesFor16 = response.data));
      axios.get(url + '/categories/getchilds/' + this.catski).then(response => (this.valuesski = response.data));
      axios.get(localStorage['URLroot'] + '/categories/getlikes').then(response => (this.SelectedValues(response.data)));
      axios.get(localStorage['URLroot'] + '/categories/getusers').then(response => (this.ValuesForUsers = response.data));              
    }
  }
</script>