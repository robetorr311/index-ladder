<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: 'futura';
        }
        /**/
        body {
            font-family: 'futura';
            margin: 3cm 2cm 2cm;
            font-weight: normal;
            font-style: normal;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          font-family: 'futura';
        }
        header {
            font-family: 'futura';
            position: fixed;
            top: 50px;
            left: 50px;
            right: 50px;
            background-color: #ffffff;
            color: white;
            text-align: center;
            line-height: 30px;
            height: 100px;
        }
        footer {
            font-family: 'futura';
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: #404346;
            text-align: center;
            line-height: 35px;
        }
        .pdf-title{
           font: 'futura';
           color: #3876aa;
           text-align: right;
           font-weight: normal;
           padding-top: 250px;
           font-style: normal;
        }
        .pdf-subtitle{
           font-family: 'futura';
           font-weight: normal;
           color: #404346;
           text-align: right;
           font-style: normal;
        }
        .pdf-declaration{
           padding-top: 250px;
           font-family: 'futura';
           color: #3876aa;
           font-weight: normal;
           text-align: right;
           font-style: notmal;
        }
        .pdf-titledefault{
           font-family: 'futura';
           font-weight: normal;
           color: #404346;
           font-style: normal;
           text-align: right;
        }          
        .pdf-default{
          padding-top: 0px;
          padding-bottom: 0px;
           font-family: 'futura';
           font-weight: normal;
           color: #404346;
           line-height: 1;
           font-style: normal; 
           word-spacing: 8px; 
           text-align: justify;
           width: 100%; 
           display: block; 
        }
        .pdf-blacked{
           font-family: 'futura';
           font-weight: normal;
           font-style: normal; 
           word-spacing: 5px;
           color: #000000;
           padding: 10px;   
        }         
        .align-right{
           text-align: right;
           font-weight: normal;
           font-style: normal;
        }                        
        .top-pdf{
           width: 100%;
           margin-left: 50px;
           margin-right: 50px;
        }
        .page-break {
           page-break-after: always;
        }
       .page-number:before {
          content: counter(page) "| Page ";
        }
        .top-image{
            font-family: 'futura';
            position: fixed;
            top: 50px;
            left: 50px;
            right: 50px;
            background-color: #ffffff;
            color: white;
            text-align: center;
            line-height: 30px;
            height: 200px;          
        }
        .icontents{
            font-family: 'futura';
            background-color: #3876aa;
            color: white;
            text-align: left;
            font-weight: normal;
            font-style: normal;
            padding-top: 100px;
        }
        .contents-table{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border: none;
           table-layout: auto;
           width: 100%;
        }
        .contents-rowtable{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border: none;
        }
        .contents-rowcol{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border: none;
        }
        .col-page{
          width: 20px;
        }
        .col-middle{
          border-bottom-width:1px;  
          border-bottom-style:dashed;
          color: #404346;
        }
        .single-title{
            font-family: 'futura';
            background-color: white;
            color: #3876aa;
            text-align: left;
            font-weight: normal;
            font-style: normal;
            padding-top: 50px;
        }
        .bluebackround-contents{
            font-family: 'futura';
            background-color: #3876aa;
            color: white;
            text-align: left;
            font-weight: normal;
            font-style: normal;
        }
        .d {
          list-style-type: decimal;
          font-weight: normal;
          font-style: normal;
          color: #404346;          
        }               
    </style>
</head>
<body>
  <header>
  </header>
    <p class="top-image"><img src="images/toppdf.png" class="top-pdf" ></p>
    <h1 class="pdf-title">TRADE/BARTER <br>AGREEMENT</h1>
    <h2 class="pdf-subtitle">Sample Agreement</h2>
    <h4 class="pdf-declaration"> Declaration</h4>
    <h5 class="pdf-titledefault align-right">The content of this document is a MANDATORY as per any trade conducted via</h5>
    <h5 class="pdf-titledefault align-right">Index Ladder services</h5>
    <h5 class="pdf-titledefault align-right">Participating Parties Names:</h5>
    <h5 class="pdf-titledefault align-right">{{ $user_name }}</h5>
    <p class="page-break"></p>
    <p class="icontents">I. CONTENTS</p>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">I. PARTICIPATING PARTIES</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">3</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="350px">II. TERMS AND CONDITIONS</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">3</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="250px">A. Initially Offered</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">4</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">B. Offered in Exchange</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">4</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="700px">C. Difference in Initially Offered VS OFFERED in exchange</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">4</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="500px">D. Possession, Exchange and/or Delivery</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">5</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">E. Scope of Exchange</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">5</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">F. Order fulfillment</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">5</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">III. CAPACITY</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">5</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="550px">IV. FULL KNOWLEDGE AND UNDERSTANDING</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">6</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">G. Time to Review</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">6</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">H. Expiration</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">6</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">V. DISPUTE RESOLUTION</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">6</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">VI. ASSIGNMENT</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">7</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">VII. NO WARRANTY</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">7</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">VIII. GOVERNING LAW</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">7</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">IX. OFFER</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">8</td></tr>
    </table>
    <table class="contents-table">
      <tr class="contents-rowtable"><td class="contents-rowcol" width="300px">X. ACCEPTANCE</td><td class="contents-rowcol col-middle"></td><td class="contents-rowcol col-page">8</td></tr>
    </table>
    <p class="page-break"></p>
    <h2 class="single-title">TRADE/BARTER AGREEMENT</h1>
    <p class="bluebackround-contents">I. PARTICIPATING PARTIES</p>
    <p class="pdf-default">The Offeree (Host User) and the Offeror (Target User), defined below, and sometimes referred collectively to in this document as “Parties” and individually as “Party”, intend to enter this legally binding TRADE/BARTER AGREEMENT, hereafter sometimes referred to as “Agreement”, on this {{ $day }}, {{ $month }} of {{ $yyyy }}, sometimes referred to in this document as “Effective Date.” The party consisting of   <span class="pdf-blacked">{{ $user_name }}</span>   [Offeree] (Host User), with principal place of business, with representative or officer <span class="pdf-blacked">{{ $user_address }}</span>, with phone number   <span class="pdf-blacked">{{ $user_phone }}</span>  , and email address or other contact information:  <span class="pdf-blacked">{{ $user_email }}</span></p>
    <p class="pdf-default">Shall be known within this Agreement as “Offeree” (Host User) , and is the party receiving initially offered items in exchange for the offer of items “Offered in exchange.”</p>
    <p class="pdf-default" >The party consisting of   <span class="pdf-blacked">{{ $partner_name }}</span>   [full name], with address of residence at   <span class="pdf-blacked">{{ $partner_address }}</span>, with phone number   <span class="pdf-blacked">{{ $partner_phone }}</span>   and email address or other contact information:   <span class="pdf-blacked">{{ $partner_email }}</span>   </p>
    <p class="pdf-default">Shall be known within this Agreement as “Offeror” (Target User), and is the party offering items “Initially Offered” beneficial to the other Party and receiving items “Offered in Exchange”.</p>
    <p class="bluebackround-contents">II. TERMS AND CONDITIONS </p>
    <p class="pdf-default">The Contract Offered starting on this “Offer Date” of the {{ $day }} <sup>th/rd</sup> of {{ $month }} of {{ $yyyy }}, and continue its availability of acceptance until the “Expiration Date” of the {{ $expday }}  <sup>th/rd</sup>  of {{ $expmonth }} of {{ $expyyyy }}, and come into effect on the “Effective Date,” stated as the time this contract is signed by the Offeree, in the section titled “Acceptance”. </p>
    <p class="pdf-default"><ol class="d"><li>Both parties agreed upon the fair market value of the product(s)/service(s) being offered to determine the associated cost.</li><li>In the absence of the fair market value of the product(s)/service(s), the participating parties mutually agreed upon the value, while acknowledge to have unambiguous understanding of the nature of exchange of agreement.</li><li>Both parties understand and agree full disclosure of exchange material, disclosure of any and all defects, defects, lack of accuracy, quantity, compromised functionality, degradation or depreciation, acceptance of all products, services and/or currency used for monetary trade by all entities that are part of the exchange.</li>
    </ol></p>    
<footer>
    <h1><p class="page-number"></p></h1>
</footer>
</body>
</html>
