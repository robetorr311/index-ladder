<template>  
  <div class="list-group">  
    <p class="pcategory"><span data-target="#products_categories" class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnProp===false" @click="ChangeBoxProp"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxProp"></i> Products</span></p>
    <div id="products_categories" class="collapse">
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1332" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1332===false" @click="ChangeBox1332"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1332"></i> Womens</span></p>
      <div id="subcategory1332" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1332">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1334" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1334===false" @click="ChangeBox1334"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1334"></i> Automotives & tools</span></p>
      <div id="subcategory1334" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1334">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1335" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1335===false" @click="ChangeBox1335"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1335"></i> Consumer Electronics</span></p>
      <div id="subcategory1335" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1335">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1336" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1336===false" @click="ChangeBox1336"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1336"></i> Mens</span></p>
      <div id="subcategory1336" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1336">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1337" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1337===false" @click="ChangeBox1337"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1337"></i> Home</span></p>
      <div id="subcategory1337" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1337">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1338" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1338===false" @click="ChangeBox1338"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1338"></i> Kids</span></p>
      <div id="subcategory1338" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1338">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1339"class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1339===false" @click="ChangeBox1339"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1339"></i> Sports and Travels</span></p>
      <div id="subcategory1339" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1339">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
      <p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1340"class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1340===false" @click="ChangeBox1340"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1340"></i>Office</span></p>
      <div id="subcategory1340" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1340">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
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
          ValuesFor1332: null,
          ValuesFor1334: null,
          ValuesFor1335: null,
          ValuesFor1336: null,
          ValuesFor1337: null,
          ValuesFor1338: null,
          ValuesFor1339: null,
          ValuesFor1340: null,
          Get1332: 1332,
          Get1334: 1334,
          Get1335: 1335,
          Get1336: 1336,
          Get1337: 1337,
          Get1338: 1338,
          Get1339: 1339,
          Get1340: 1340,
          ClickOn1332: false,
          ClickOn1334: false,
          ClickOn1335: false,
          ClickOn1336: false,
          ClickOn1337: false,
          ClickOn1338: false,
          ClickOn1339: false,
          ClickOn1340: false,
          ClickOnProp: false,
          selectedCategory:[],
          IsSaved:'',
          GetProducts:'',
        };
      },
      methods: {
        SelectCategory(categorypro){
          this.selectedCategory.push(categorypro);
          axios.post( localStorage['URLroot'] + '/seedstore' ,
          {
            csrfToken: myToken.csrfToken,
            type_id: 1331,
            category_id: categorypro,
          }
          ).then(response => (this.IsSaved = response.data));
        },
        ChangeBoxProp(){
          var statusprop=this.ClickOnProp;
          if(statusprop==true){ this.ClickOnProp=false; } else { this.ClickOnProp=true; }
        },
        ChangeBox1332(){
          var status1332=this.ClickOn1332;
          if(status1332==true){ this.ClickOn1332=false; } else { this.ClickOn1332=true; }
        },
        ChangeBox1334(){
          var status1334=this.ClickOn1334;
          if(status1334==true){ this.ClickOn1334=false; } else { this.ClickOn1334=true; }
        },
        ChangeBox1335(){
          var status1335=this.ClickOn1335;
          if(status1335==true){ this.ClickOn1335=false; } else { this.ClickOn1335=true; }
        },
        ChangeBox1336(){
          var status1336=this.ClickOn1336;
          if(status1336==true){ this.ClickOn1336=false; } else { this.ClickOn1336=true; }
        },
        ChangeBox1337(){
          var status1337=this.ClickOn1337;
          if(status1337==true){ this.ClickOn1337=false; } else { this.ClickOn1337=true; }
        },
        ChangeBox1338(){
          var status1338=this.ClickOn1338;
          if(status1338==true){ this.ClickOn1338=false; } else { this.ClickOn1338=true; }
        },
        ChangeBox1339(){
          var status1339=this.ClickOn1339;
          if(status1339==true){ this.ClickOn1339=false; } else { this.ClickOn1339=true; }
        },
        ChangeBox1340(){
          var status1340=this.ClickOn1340;
          if(status1340==true){ this.ClickOn1340=false; } else { this.ClickOn1340=true; }
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
        SearchByIDCat(){
          var ValuestoFind=this.selectedCategory.toString();
          var url = localStorage['URLroot'];
          axios.get(url + '/product/findbyc/' + ValuestoFind)
          .then(function(response) {
            location.href = response.data.redirect;
          });
        },
        GetProd(response){
          let c=[];
          $.each(response, function(key, value) {
            c.push(value.category_id);
          });
          this.selectedCategory=c;
        }                  
      },
      mounted() {
      var url = localStorage['URLroot'];
      axios.get(url + '/categories/getchilds/' + this.Get1332).then(response => (this.ValuesFor1332 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1334).then(response => (this.ValuesFor1334 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1335).then(response => (this.ValuesFor1335 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1336).then(response => (this.ValuesFor1336 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1337).then(response => (this.ValuesFor1337 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1338).then(response => (this.ValuesFor1338 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1339).then(response => (this.ValuesFor1339 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1340).then(response => (this.ValuesFor1340 = response.data));
      axios.get(url + '/GetSeedProducts').then(response => (this.GetProd(response.data)));
      },
    }
</script>