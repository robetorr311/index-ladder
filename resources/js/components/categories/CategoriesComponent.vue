<template>
  <div class="row">
  <div class="col">
  <div class="row">
	<div class="col">
  <h5><span class="categorieslink"> Choose your favorites categories and click in button to view</span></h5>
    <button type="button" class="btn-secondary" @click="SearchByIDCat"><i class="fas fa-search"></i> Search</button>
  </div>
  </div>
  <div class="row">
    <div class="col over">
  <div class="list-group">  
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
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1799" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1799===false" @click="ChangeBox1799"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1799"></i> Academic Consulting Services</span></p>
      <div id="subcategory1799" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1799">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1800" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1800===false" @click="ChangeBox1800"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1800"></i> Administrative Services</span></p>
      <div id="subcategory1800" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1800">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1801" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1801===false" @click="ChangeBox1801"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1801"></i> Animal Care Services</span></p>
      <div id="subcategory1801" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1801">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1802" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1802===false" @click="ChangeBox1802"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1802"></i> Automobile Maintenance and Repair</span></p>
      <div id="subcategory1802" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1802">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1803" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1803===false" @click="ChangeBox1803"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1803"></i> Beauty and Lifestyle Service Business</span></p>
      <div id="subcategory1803" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1803">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1804" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1804===false" @click="ChangeBox1804"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1804"></i> Elder Care Services</span></p>
      <div id="subcategory1804" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1804">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1805" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1805===false" @click="ChangeBox1805"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1805"></i> Event Service Businesses</span></p>
      <div id="subcategory1805" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1805">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1806" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1806===false" @click="ChangeBox1806"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1806"></i> Home Maintenance and Repair Services</span></p>
      <div id="subcategory1806" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1806">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1807" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1807===false" @click="ChangeBox1807"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1807"></i> Legal Services</span></p>
      <div id="subcategory1807" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1807">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1808" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1808===false" @click="ChangeBox1808"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1808"></i> Personal Concierge Services</span></p>
      <div id="subcategory1808" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1808">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1809" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1809===false" @click="ChangeBox1809"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1809"></i> Personal Health and Wellness Services</span></p>
      <div id="subcategory1809" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1809">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1810" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1810===false" @click="ChangeBox1810"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1810"></i> Sales and Marketing</span></p>
      <div id="subcategory1810" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1810">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1811" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1811===false" @click="ChangeBox1811"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1811"></i> Serving Parents Babies and Small Children</span></p>
      <div id="subcategory1811" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1811">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1812" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1812===false" @click="ChangeBox1812"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1812"></i> Technology Maintenance and Repair Services</span></p>
      <div id="subcategory1812" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1812">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1813" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1813===false" @click="ChangeBox1813"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1813"></i> Travel and Tourism Service Businesses</span></p>
      <div id="subcategory1813" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1813">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>
    </div>   
    <p class="pcategory"><span data-target="#skills_categories"  class="categorieslink" data-toggle="collapse"><i class="fas fa-plus-square" v-if="ClickOnSkill===false" @click="ChangeBoxSkill"></i><i class="fas fa-minus-square" v-else @click="ChangeBoxSkill"></i> Skills</span></p>
    <div id="skills_categories" class="collapse">
<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1957" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1957===false" @click="ChangeBox1957"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1957"></i> Academic Consulting Skills</span></p>
      <div id="subcategory1957" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1957">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1958" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1958===false" @click="ChangeBox1958"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1958"></i> Administrative Skills</span></p>
      <div id="subcategory1958" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1958">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1959" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1959===false" @click="ChangeBox1959"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1959"></i> Automobile Maintenance and Repairing Skills</span></p>
      <div id="subcategory1959" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1959">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1960" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1960===false" @click="ChangeBox1960"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1960"></i> Animal Care Skills</span></p>
      <div id="subcategory1960" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1960">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1961" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1961===false" @click="ChangeBox1961"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1961"></i> Beauty and Lifestyle Skills Business</span></p>
      <div id="subcategory1961" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1961">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1962" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1962===false" @click="ChangeBox1962"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1962"></i> Elder Care Skills</span></p>
      <div id="subcategory1962" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1962">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1963" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1963===false" @click="ChangeBox1963"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1963"></i> Event Service Skills</span></p>
      <div id="subcategory1963" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1963">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1964" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1964===false" @click="ChangeBox1964"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1964"></i> Home Maintenance and Repair Skills</span></p>
      <div id="subcategory1964" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1964">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1965" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1965===false" @click="ChangeBox1965"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1965"></i> Legal Skills</span></p>
      <div id="subcategory1965" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1965">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1966" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1966===false" @click="ChangeBox1966"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1966"></i> Personal Concierge Skills</span></p>
      <div id="subcategory1966" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1966">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1967" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1967===false" @click="ChangeBox1967"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1967"></i> Personal Health and Wellness Skills</span></p>
      <div id="subcategory1967" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1967">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1968" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1968===false" @click="ChangeBox1968"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1968"></i> Sales and Marketing</span></p>
      <div id="subcategory1968" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1968">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1969" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1969===false" @click="ChangeBox1969"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1969"></i> Serving Parents, Babies, and Small Children</span></p>
      <div id="subcategory1969" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1969">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1970" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1970===false" @click="ChangeBox1970"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1970"></i> Technology Maintenance and Repair Skills</span></p>
      <div id="subcategory1970" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1970">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
         </div>
      </div>

<p class="pcategory"><span data-toggle="collapse" data-target="#subcategory1971" class="categorieslink"><i class="fas fa-plus-square" v-if="ClickOn1971===false" @click="ChangeBox1971"></i><i class="fas fa-minus-square" v-else @click="ChangeBox1971"></i> Travel and Tourism Service Businesses</span></p>
      <div id="subcategory1971" class="collapse">
         <div class="pad-left" v-for="item in ValuesFor1971">
          <p class="pcategory"><span class="categorieslink" data-toggle="collapse" >
             <i class="far fa-check-square" @click="SelectCategory(item.id)" v-if="selectedCategory.includes(item.id)"></i>
             <i class="far fa-square cursor" @click="SelectCategory(item.id)" v-else></i> {{ item.name }}</span></p>
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
        Get1332: 1332,
        Get1333: 1333,
        Get1334: 1334,
        Get1335: 1335,
        Get1336: 1336,
        Get1337: 1337,
        Get1338: 1338,
        Get1339: 1339,
        Get1340: 1340,
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
      	selectedCategory:[]
      }
    },
    props: [ ],
    methods: {
      SelectCategory(categorypro){
      	var n = this.selectedCategory.includes(categorypro);
      	console.log(n);
        if(n){ 
        	console.log('Success'); 
        } 
        else { 
        	this.selectedCategory.push(categorypro);
        }
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
      ChangeBox1957(){
        var status=this.ClickOn1957;
        if(status==true){ this.ClickOn1957=false; } else { this.ClickOn1957=true; }
      },
      ChangeBox1958(){
        var status=this.ClickOn1958;
        if(status==true){ this.ClickOn1958=false; } else { this.ClickOn1958=true; }
      },
      ChangeBox1959(){
        var status=this.ClickOn1959;
        if(status==true){ this.ClickOn1959=false; } else { this.ClickOn1959=true; }
      },
      ChangeBox1960(){
        var status=this.ClickOn1960;
        if(status==true){ this.ClickOn1960=false; } else { this.ClickOn1960=true; }
      },
      ChangeBox1961(){
        var status=this.ClickOn1961;
        if(status==true){ this.ClickOn1961=false; } else { this.ClickOn1961=true; }
      },
      ChangeBox1962(){
        var status=this.ClickOn1962;
        if(status==true){ this.ClickOn1962=false; } else { this.ClickOn1962=true; }
      },
      ChangeBox1963(){
        var status=this.ClickOn1963;
        if(status==true){ this.ClickOn1963=false; } else { this.ClickOn1963=true; }
      },
      ChangeBox1964(){
        var status=this.ClickOn1964;
        if(status==true){ this.ClickOn1964=false; } else { this.ClickOn1964=true; }
      },
      ChangeBox1965(){
        var status=this.ClickOn1965;
        if(status==true){ this.ClickOn1965=false; } else { this.ClickOn1965=true; }
      },
      ChangeBox1966(){
        var status=this.ClickOn1966;
        if(status==true){ this.ClickOn1966=false; } else { this.ClickOn1966=true; }
      },
      ChangeBox1967(){
        var status=this.ClickOn1967;
        if(status==true){ this.ClickOn1967=false; } else { this.ClickOn1967=true; }
      },
      ChangeBox1968(){
        var status=this.ClickOn1968;
        if(status==true){ this.ClickOn1968=false; } else { this.ClickOn1968=true; }
      },
      ChangeBox1969(){
        var status=this.ClickOn1969;
        if(status==true){ this.ClickOn1969=false; } else { this.ClickOn1969=true; }
      },
      ChangeBox1970(){
        var status=this.ClickOn1970;
        if(status==true){ this.ClickOn1970=false; } else { this.ClickOn1970=true; }
      },
      ChangeBox1971(){
        var status=this.ClickOn1971;
        if(status==true){ this.ClickOn1971=false; } else { this.ClickOn1971=true; }
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
      }               
    },
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
    }
  }	
</script>