<template>
  <div class="list-group">  
    <p class="pcategory"><span data-target="#services_categories" class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnServ===false" @click="ChangeBoxServ"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxServ"></i> Services</span></p>
    <div id="services_categories" class="collapse">
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1799" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1799===false" @click="ChangeBox1799"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1799"></i> Academic Consulting Services</span></p>
      <div id="subcategory1799" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1799">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1800" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1800===false" @click="ChangeBox1800"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1800"></i> Administrative Services</span></p>
      <div id="subcategory1800" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1800">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1801" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1801===false" @click="ChangeBox1801"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1801"></i> Animal Care Services</span></p>
      <div id="subcategory1801" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1801">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1802" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1802===false" @click="ChangeBox1802"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1802"></i> Automobile Maintenance and Repair</span></p>
      <div id="subcategory1802" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1802">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1803" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1803===false" @click="ChangeBox1803"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1803"></i> Beauty and Lifestyle Service Business</span></p>
      <div id="subcategory1803" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1803">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1804" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1804===false" @click="ChangeBox1804"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1804"></i> Elder Care Services</span></p>
      <div id="subcategory1804" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1804">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1805" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1805===false" @click="ChangeBox1805"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1805"></i> Event Service Businesses</span></p>
      <div id="subcategory1805" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1805">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1806" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1806===false" @click="ChangeBox1806"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1806"></i> Home Maintenance and Repair Services</span></p>
      <div id="subcategory1806" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1806">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1807" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1807===false" @click="ChangeBox1807"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1807"></i> Legal Services</span></p>
      <div id="subcategory1807" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1807">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1808" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1808===false" @click="ChangeBox1808"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1808"></i> Personal Concierge Services</span></p>
      <div id="subcategory1808" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1808">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1809" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1809===false" @click="ChangeBox1809"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1809"></i> Personal Health and Wellness Services</span></p>
      <div id="subcategory1809" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1809">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1810" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1810===false" @click="ChangeBox1810"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1810"></i> Sales and Marketing</span></p>
      <div id="subcategory1810" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1810">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1811" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1811===false" @click="ChangeBox1811"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1811"></i> Serving Parents Babies and Small Children</span></p>
      <div id="subcategory1811" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1811">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1812" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1812===false" @click="ChangeBox1812"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1812"></i> Technology Maintenance and Repair Services</span></p>
      <div id="subcategory1812" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1812">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="psubcategory"><span data-toggle="collapse" data-target="#subcategory1813" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1813===false" @click="ChangeBox1813"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1813"></i> Travel and Tourism Service Businesses</span></p>
      <div id="subcategory1813" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1813">
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
        ValuesFor1799: null,
        ValuesFor1800: null,
        ValuesFor1801: null,
        ValuesFor1802: null,
        ValuesFor1803: null,
        ValuesFor1804: null,
        ValuesFor1805: null,
        ValuesFor1806: null,
        ValuesFor1807: null,
        ValuesFor1808: null,
        ValuesFor1809: null,
        ValuesFor1810: null,
        ValuesFor1811: null,
        ValuesFor1812: null,
        ValuesFor1813: null,
        Get1799: 1799,
        Get1800: 1800,
        Get1801: 1801,
        Get1802: 1802,
        Get1803: 1803,
        Get1804: 1804,
        Get1805: 1805,
        Get1806: 1806,
        Get1807: 1807,
        Get1808: 1808,
        Get1809: 1809,
        Get1810: 1810,
        Get1811: 1811,
        Get1812: 1812,
        Get1813: 1813,
        ClickOn1799: false,
        ClickOn1800: false,
        ClickOn1801: false,
        ClickOn1802: false,
        ClickOn1803: false,
        ClickOn1804: false,
        ClickOn1805: false,
        ClickOn1806: false,
        ClickOn1807: false,
        ClickOn1808: false,
        ClickOn1809: false,
        ClickOn1810: false,
        ClickOn1811: false,
        ClickOn1812: false,
        ClickOn1813: false,
        ClickOnServ: false,
        selectedCategory:[],
            };
        },
        methods: {
      SelectCategory(categorypro){
        	this.selectedCategory.push(categorypro);
          axios.post( localStorage['URLroot'] + '/seedstore' ,
          {
            csrfToken: myToken.csrfToken,
            type_id: 1329,
            category_id: categorypro,
          }
          ).then(response => (this.IsSaved = response.data));
      },
      ChangeBoxServ(){
        var status=this.ClickOnServ;
        if(status==true){ this.ClickOnServ=false; } else { this.ClickOnServ=true; }
      },
      ChangeBox1799(){
        var status=this.ClickOn1799;
        if(status==true){ this.ClickOn1799=false; } else { this.ClickOn1799=true; }
      },
      ChangeBox1800(){
        var status=this.ClickOn1800;
        if(status==true){ this.ClickOn1800=false; } else { this.ClickOn1800=true; }
      },
      ChangeBox1801(){
        var status=this.ClickOn1801;
        if(status==true){ this.ClickOn1801=false; } else { this.ClickOn1801=true; }
      },
      ChangeBox1802(){
        var status=this.ClickOn1802;
        if(status==true){ this.ClickOn1802=false; } else { this.ClickOn1802=true; }
      },
      ChangeBox1803(){
        var status=this.ClickOn1803;
        if(status==true){ this.ClickOn1803=false; } else { this.ClickOn1803=true; }
      },
      ChangeBox1804(){
        var status=this.ClickOn1804;
        if(status==true){ this.ClickOn1804=false; } else { this.ClickOn1804=true; }
      },
      ChangeBox1805(){
        var status=this.ClickOn1805;
        if(status==true){ this.ClickOn1805=false; } else { this.ClickOn1805=true; }
      },
      ChangeBox1806(){
        var status=this.ClickOn1806;
        if(status==true){ this.ClickOn1806=false; } else { this.ClickOn1806=true; }
      },
      ChangeBox1807(){
        var status=this.ClickOn1807;
        if(status==true){ this.ClickOn1807=false; } else { this.ClickOn1807=true; }
      },
      ChangeBox1808(){
        var status=this.ClickOn1808;
        if(status==true){ this.ClickOn1808=false; } else { this.ClickOn1808=true; }
      },
      ChangeBox1809(){
        var status=this.ClickOn1809;
        if(status==true){ this.ClickOn1809=false; } else { this.ClickOn1809=true; }
      },
      ChangeBox1810(){
        var status=this.ClickOn1810;
        if(status==true){ this.ClickOn1810=false; } else { this.ClickOn1810=true; }
      },
      ChangeBox1811(){
        var status=this.ClickOn1811;
        if(status==true){ this.ClickOn1811=false; } else { this.ClickOn1811=true; }
      },
      ChangeBox1812(){
        var status=this.ClickOn1812;
        if(status==true){ this.ClickOn1812=false; } else { this.ClickOn1812=true; }
      },
      ChangeBox1813(){
        var status=this.ClickOn1813;
        if(status==true){ this.ClickOn1813=false; } else { this.ClickOn1813=true; }
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
        GetServ(response){
          let c=[];
          $.each(response, function(key, value) {
            c.push(value.category_id);
          });
          this.selectedCategory=c;
        }       

        },
        mounted() {
      var url = localStorage['URLroot'];
      axios.get(url + '/categories/getchilds/' + this.Get1799).then(response => (this.ValuesFor1799 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1800).then(response => (this.ValuesFor1800 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1801).then(response => (this.ValuesFor1801 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1802).then(response => (this.ValuesFor1802 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1803).then(response => (this.ValuesFor1803 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1804).then(response => (this.ValuesFor1804 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1805).then(response => (this.ValuesFor1805 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1806).then(response => (this.ValuesFor1806 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1807).then(response => (this.ValuesFor1807 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1808).then(response => (this.ValuesFor1808 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1809).then(response => (this.ValuesFor1809 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1810).then(response => (this.ValuesFor1810 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1811).then(response => (this.ValuesFor1811 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1812).then(response => (this.ValuesFor1812 = response.data));
      axios.get(url + '/categories/getchilds/' + this.Get1813).then(response => (this.ValuesFor1813 = response.data));
      axios.get(url + '/GetSeedServices').then(response => (this.GetServ(response.data)));
        },

    }
</script>