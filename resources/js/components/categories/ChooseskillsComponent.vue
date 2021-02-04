<template>
  <div class="list-group">  
    <p class="pcategory"><span data-target="#skills_categories"  class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnSkill===false" @click="ChangeBoxSkill"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxSkill"></i> Skills</span></p>
    <div id="skills_categories" class="collapse">
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1957" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1957===false" @click="ChangeBox1957"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1957"></i> Academic Consulting Skills</span></p>
      <div id="subcategory1957" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1957">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1958" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1958===false" @click="ChangeBox1958"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1958"></i> Administrative Skills</span></p>
      <div id="subcategory1958" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1958">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1959" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1959===false" @click="ChangeBox1959"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1959"></i> Automobile Maintenance and Repairing Skills</span></p>
      <div id="subcategory1959" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1959">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1960" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1960===false" @click="ChangeBox1960"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1960"></i> Animal Care Skills</span></p>
      <div id="subcategory1960" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1960">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1961" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1961===false" @click="ChangeBox1961"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1961"></i> Beauty and Lifestyle Skills Business</span></p>
      <div id="subcategory1961" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1961">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1962" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1962===false" @click="ChangeBox1962"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1962"></i> Elder Care Skills</span></p>
      <div id="subcategory1962" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1962">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1963" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1963===false" @click="ChangeBox1963"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1963"></i> Event Service Skills</span></p>
      <div id="subcategory1963" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1963">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1964" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1964===false" @click="ChangeBox1964"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1964"></i> Home Maintenance and Repair Skills</span></p>
      <div id="subcategory1964" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1964">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1965" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1965===false" @click="ChangeBox1965"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1965"></i> Legal Skills</span></p>
      <div id="subcategory1965" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1965">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1966" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1966===false" @click="ChangeBox1966"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1966"></i> Personal Concierge Skills</span></p>
      <div id="subcategory1966" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1966">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1967" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1967===false" @click="ChangeBox1967"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1967"></i> Personal Health and Wellness Skills</span></p>
      <div id="subcategory1967" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1967">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1968" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1968===false" @click="ChangeBox1968"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1968"></i> Sales and Marketing</span></p>
      <div id="subcategory1968" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1968">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1969" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1969===false" @click="ChangeBox1969"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1969"></i> Serving Parents, Babies, and Small Children</span></p>
      <div id="subcategory1969" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1969">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1970" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1970===false" @click="ChangeBox1970"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1970"></i> Technology Maintenance and Repair Skills</span></p>
      <div id="subcategory1970" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1970">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1971" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1971===false" @click="ChangeBox1971"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1971"></i> Travel and Tourism Service Businesses</span></p>
      <div id="subcategory1971" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1971">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
    </div>       
</div>
</template>
<script>
    export default {
        data() {
            return {
        ValuesFor1957:null,
        ValuesFor1958:null,
        ValuesFor1959:null,
        ValuesFor1960:null,
        ValuesFor1961:null,
        ValuesFor1962:null,
        ValuesFor1963:null,
        ValuesFor1964:null,
        ValuesFor1965:null,
        ValuesFor1966:null,
        ValuesFor1967:null,
        ValuesFor1968:null,
        ValuesFor1969:null,
        ValuesFor1970:null,
        ValuesFor1971:null,        
      	catski: 1330,
        Get1957: 1957,
        Get1958: 1958,
        Get1959: 1959,
        Get1960: 1960,
        Get1961: 1961,
        Get1962: 1962,
        Get1963: 1963,
        Get1964: 1964,
        Get1965: 1965,
        Get1966: 1966,
        Get1967: 1967,
        Get1968: 1968,
        Get1969: 1969,
        Get1970: 1970,
        Get1971: 1971,        
        ClickOn1957:false,
        ClickOn1958:false,
        ClickOn1959:false,
        ClickOn1960:false,
        ClickOn1961:false,
        ClickOn1962:false,
        ClickOn1963:false,
        ClickOn1964:false,
        ClickOn1965:false,
        ClickOn1966:false,
        ClickOn1967:false,
        ClickOn1968:false,
        ClickOn1969:false,
        ClickOn1970:false,
        ClickOn1971:false,        
      	valuesski: null,
      	selectedCategory:[],
        ClickOnSkill: false,
            };
        },
        methods: {
      SelectCategory(categorypro){
        	this.selectedCategory.push(categorypro);
          axios.post( localStorage['URLroot'] + '/seedstore' ,
          {
            csrfToken: myToken.csrfToken,
            type_id: 1330,
            category_id: categorypro,
          }
          ).then(response => (this.IsSaved = response.data));          
      },
      ChangeBoxSkill(){
        var statussk=this.ClickOnSkill;
        if(statussk==true){ this.ClickOnSkill=false; } else { this.ClickOnSkill=true; }
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
      ChangeBox1957(){
        var status1957=this.ClickOn1957;
        if(status1957==true){ this.ClickOn1957=false; } else { this.ClickOn1957=true; }
      },
      ChangeBox1958(){
        var status1958=this.ClickOn1958;
        if(status1958==true){ this.ClickOn1958=false; } else { this.ClickOn1958=true; }
      },
      ChangeBox1959(){
        var status1959=this.ClickOn1959;
        if(status1959==true){ this.ClickOn1959=false; } else { this.ClickOn1959=true; }
      },
      ChangeBox1960(){
        var status1960=this.ClickOn1960;
        if(status1960==true){ this.ClickOn1960=false; } else { this.ClickOn1960=true; }
      },
      ChangeBox1961(){
        var status1961=this.ClickOn1961;
        if(status1961==true){ this.ClickOn1961=false; } else { this.ClickOn1961=true; }
      },
      ChangeBox1962(){
        var status1962=this.ClickOn1962;
        if(status1962==true){ this.ClickOn1962=false; } else { this.ClickOn1962=true; }
      },
      ChangeBox1963(){
        var status1963=this.ClickOn1963;
        if(status1963==true){ this.ClickOn1963=false; } else { this.ClickOn1963=true; }
      },
      ChangeBox1964(){
        var status1964=this.ClickOn1964;
        if(status1964==true){ this.ClickOn1964=false; } else { this.ClickOn1964=true; }
      },
      ChangeBox1965(){
        var status1965=this.ClickOn1965;
        if(status1965=true){ this.ClickOn1965=false; } else { this.ClickOn1965=true; }
      },
      ChangeBox1966(){
        var status1966=this.ClickOn1966;
        if(status1966==true){ this.ClickOn1966=false; } else { this.ClickOn1966=true; }
      },
      ChangeBox1967(){
        var status1967=this.ClickOn1967;
        if(status1967==true){ this.ClickOn1967=false; } else { this.ClickOn1967=true; }
      },
      ChangeBox1968(){
        var status1968=this.ClickOn1968;
        if(status1968==true){ this.ClickOn1968=false; } else { this.ClickOn1968=true; }
      },
      ChangeBox1969(){
        var status1969=this.ClickOn1969;
        if(status1969==true){ this.ClickOn1969=false; } else { this.ClickOn1969=true; }
      },
      ChangeBox1970(){
        var status1970=this.ClickOn1970;
        if(status1970==true){ this.ClickOn1970=false; } else { this.ClickOn1970=true; }
      },
      ChangeBox1971(){
        var status1971=this.ClickOn1971;
        if(status1971==true){ this.ClickOn1971=false; } else { this.ClickOn1971=true; }
      },
        GetSk(response){
          let c=[];
          $.each(response, function(key, value) {
            c.push(value.category_id);
          });
          this.selectedCategory=c;
        }      
    },
        mounted() {
      var url = localStorage['URLroot'];
      axios.get(url + '/categories/getchilds/' + this.Get1957).then(response => (this.ValuesFor1957 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1958).then(response => (this.ValuesFor1958 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1959).then(response => (this.ValuesFor1959 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1960).then(response => (this.ValuesFor1960 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1961).then(response => (this.ValuesFor1961 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1962).then(response => (this.ValuesFor1962 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1963).then(response => (this.ValuesFor1963 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1964).then(response => (this.ValuesFor1964 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1965).then(response => (this.ValuesFor1965 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1966).then(response => (this.ValuesFor1966 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1967).then(response => (this.ValuesFor1967 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1968).then(response => (this.ValuesFor1968 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1969).then(response => (this.ValuesFor1969 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1970).then(response => (this.ValuesFor1970 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1971).then(response => (this.ValuesFor1971 = response.data));
      axios.get(url + '/GetSeedSkills').then(response => (this.GetSk(response.data)));
    },
  }
</script>