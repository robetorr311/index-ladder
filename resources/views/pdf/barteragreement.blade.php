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
            margin: 1cm 1cm 1cm 1cm ;
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
           margin: 5px 25px 5px 5px ; 
        }
        .pdf-subtitle{
           font-family: 'futura';
           font-weight: normal;
           color: #404346;
           text-align: right;
           font-style: normal;
           margin: 5px 25px 5px 5px ; 
        }
        .pdf-declaration{
           padding-top: 550px;
           font-family: 'futura';
           color: #3876aa;
           font-weight: normal;
           text-align: right;
           font-style: notmal;
           margin: 5px 25px 5px 5px ; 
        }
        .pdf-titledefault{
           font-family: 'futura';
           font-weight: normal;
           color: #404346;
           font-style: normal;
           text-align: right;
           margin: 5px 25px 5px 5px ; 
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
           margin: 5px 25px 5px 5px ; 
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
            /*padding-top: 100px;*/
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
        .effective-table{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border: none;
           table-layout: auto;
           width: 100%;
        }
        .effective-row{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border: none;
        }
        .effective-col{
           font-family: 'futura';
           background-color: #ffffff;
           font-weight: normal;
           color: #404346;
           font-style: normal;
           border-top:none;
           border-left: none;
           border-right: none;
           border-bottom: 1px solid #404346;
           height: 32px;
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
            margin: 5px 25px 5px 5px ;
            
        }
        .bluebackround-contents{
            font-family: 'futura';
            background-color: #3876aa;
            color: white;
            text-align: left;
            font-weight: normal;
            font-style: normal;
            margin: 5px 25px 5px 5px ;
        }
        .d {
          list-style-type: decimal;
          font-weight: normal;
          font-style: normal;
          color: #404346;
          margin: 5px 25px 5px 5px ;
        }
        .pdf-newpage{
          top: 199px;
          position: absolute;
            padding-top: 0px;
            border: 1px solid #404346;
            width: 1130px;
            height: 1300px;
        }
        .gray-title{
            font-family: 'futura';
            background-color: #dbdbdb;
            color: #404346;
            text-align: left;
            font-weight: normal;
            font-style: normal;
            /*padding-top: 100px;*/
        }
        .x-checkbox{
            position: relative;
            color: #404346;
            border: 1px solid #404346;
            width: 20px;
            height: 20px;
        }
        .checkbox-inner{
          display: inline-block;
          position: absolute;
          border: none;
          top: -11px;
          left: 2px;
        }          
    </style>
</head>
<body>
  <header>
    <img src="images/toppdf.png" class="top-pdf" >
  </header>
    <div class="pdf-newpage">
    <h1 class="pdf-title">TRADE/BARTER <br>AGREEMENT</h1>
    <h2 class="pdf-subtitle">Sample Agreement</h2>
    <h4 class="pdf-declaration"> Declaration</h4>
    <h5 class="pdf-titledefault align-right">The content of this document is a MANDATORY as per any trade conducted via</h5>
    <h5 class="pdf-titledefault align-right">Index Ladder services</h5>
    <h5 class="pdf-titledefault align-right">Participating Parties Names:</h5>
    <h5 class="pdf-titledefault align-right">{{ $user_offer_email }}</h5>
    <h5 class="pdf-titledefault align-right">{{ $user_exchange_email }}</h5>
    </div>
    <p class="page-break"></p>
    <div class="pdf-newpage">
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
    </div>
    <p class="page-break"></p>
    <div class="pdf-newpage">
    <h2 class="single-title">TRADE/BARTER AGREEMENT</h2>
    <p class="bluebackround-contents">I. PARTICIPATING PARTIES</p>
    <p class="pdf-default">The Offeree (Host User) and the Offeror (Target User), defined below, and sometimes referred collectively to in this document as “Parties” and individually as “Party”, intend to enter this legally binding TRADE/BARTER AGREEMENT, hereafter sometimes referred to as “Agreement”, on this {{ $day }}, {{ $month }} of {{ $yyyy }}, sometimes referred to in this document as “Effective Date.” The party consisting of   <span class="pdf-blacked">{{ $user_offer_name }}</span>   [Offeree] (Host User), with principal place of business, with representative or officer <span class="pdf-blacked">{{ $user_offer_address }}</span>, with phone number   <span class="pdf-blacked">{{ $user_offer_phone }}</span>  , and email address or other contact information:  <span class="pdf-blacked">{{ $user_offer_email }}</span></p>
    <p class="pdf-default">Shall be known within this Agreement as “Offeree” (Host User) , and is the party receiving initially offered items in exchange for the offer of items “Offered in exchange.”</p>
    <p class="pdf-default" >The party consisting of   <span class="pdf-blacked">{{ $user_exchange_name }}</span>   [full name], with address of residence at   <span class="pdf-blacked">{{ $user_exchange_address }}</span>, with phone number   <span class="pdf-blacked">{{ $user_exchange_phone }}</span>   and email address or other contact information:   <span class="pdf-blacked">{{ $user_exchange_email }}</span>   </p>
    <p class="pdf-default">Shall be known within this Agreement as “Offeror” (Target User), and is the party offering items “Initially Offered” beneficial to the other Party and receiving items “Offered in Exchange”.</p>
    <p class="bluebackround-contents">II. TERMS AND CONDITIONS </p>
    <p class="pdf-default">The Contract Offered starting on this “Offer Date” of the {{ $starting_at_day }} <sup>th/rd</sup> of {{ $starting_at_month }} of {{ $starting_at_yyyy }}, and continue its availability of acceptance until the “Expiration Date” of the {{ $end_at_day }}  <sup>th/rd</sup>  of {{ $end_at_month }} of {{ $end_at_yyyy }}, and come into effect on the “Effective Date,” stated as the time this contract is signed by the Offeree, in the section titled “Acceptance”. </p>
    <ol class="d"><p class="pdf-default"><li>Both parties agreed upon the fair market value of the product(s)/service(s) being offered to determine the associated cost.</li><li>In the absence of the fair market value of the product(s)/service(s), the participating parties mutually agreed upon the value, while acknowledge to have unambiguous understanding of the nature of exchange of agreement.</li><li>Both parties understand and agree full disclosure of exchange material, disclosure of any and all defects, defects, lack of accuracy, quantity, compromised functionality, degradation or depreciation, acceptance of all products, services and/or currency used for monetary trade by all entities that are part of the exchange.</li>
    </p>
    </ol>
    </div>
    <p class="page-break"></p>
    <div class="pdf-newpage"><ol start="4" class="d">
    <li>To ensure that the total exchange of goods is equitable and fair. As - party decides to provide additional
goods / services or monetary compensation, any discrepancy in trade values is settled.</li>
    <li>Neither party shall have any hold, claim, or due over the other once this contract has been completed.
Both parties shall indemnify and hold harmless the other for (including, but not limited to) voiding the
warranty, loss, theft, injury, and death caused by the bartered item(s).</li>  
    </ol>
    <p class="gray-title">A. INITIALLY OFFERED</p>
    <div class="x-checkbox">
      @if ($offer_type == '1331')
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Products</p>
    @if ($offer_type == '1331')
    <p class="pdf-default">{{ $offer }}</p>
    @endif
    <div class="x-checkbox ">
      @if (($offer_type == '1330')||($offer_type == '1329'))
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Services</p>
    @if (($offer_type == '1330')||($offer_type == '1329'))
    <p class="pdf-default">{{ $offer }}</p>
    @endif    
    <div class="x-checkbox">
      @if ($offer_type == '1796')
        <div class="checkbox-inner">X</div>
      @endif</div><p class="pdf-default">Products + Services</p>
    <div class="x-checkbox"></div><p class="pdf-default">Cash / Money</p>
    <p class="gray-title">B. OFFER IN EXCHANGE</p>
    <div class="x-checkbox">
      @if ($exchange_type == '1331')
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Products</p>
    @if ($exchange_type == '1331')
    <p class="pdf-default">{{ $exchange }}</p>
    @endif
    <div class="x-checkbox ">
      @if (($exchange_type == '1330')||($exchange_type == '1329'))
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Services</p>
    @if (($exchange_type == '1330')||($exchange_type == '1329'))
    <p class="pdf-default">{{ $exchange }}</p>
    @endif    
    <div class="x-checkbox">
      @if ($exchange_type == '1796')
        <div class="checkbox-inner">X</div>
      @endif</div><p class="pdf-default">Products + Services</p>
    <div class="x-checkbox"></div><p class="pdf-default">Cash / Money</p>
    </div>    
    <p class="page-break"></p>
    <div class="pdf-newpage"><ol start="4" class="d">
    <p class="gray-title">C. DIFFERENCE IN INITIALLY OFFERED VS OFFERED IN EXCHANGE</p>
    <p class="pdf-default">Both parties recognise and accept the difference in trade or exchange of Initially Offered VS OFFERED in
Exchange, to the owing party.</p>
    <div class="x-checkbox">
      @if ($exchange_type == '1331')
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Products</p>
    @if ($exchange_type == '1331')
    <p class="pdf-default">{{ $exchange }}</p>
    @endif
    <div class="x-checkbox ">
      @if (($exchange_type == '1330')||($exchange_type == '1329'))
        <div class="checkbox-inner">X</div>
      @endif
    </div><p class="pdf-default">Services</p>
    @if (($exchange_type == '1330')||($exchange_type == '1329'))
    <p class="pdf-default">{{ $exchange }}</p>
    <p class="pdf-default">Time Duration for Service delivery: {{ $time_services }}</p>
    @endif
     <div class="x-checkbox">
      @if ($exchange_type == '1796')
        <div class="checkbox-inner">X</div>
      @endif</div><p class="pdf-default">Products + Services</p>
    <div class="x-checkbox"></div><p class="pdf-default">Cash / Money</p>  
    <p class="pdf-default">Aggregate Monetary Value of Offer = [fair market value of the product(s)/service(s)/cash/Money]</p>
    <p class="gray-title">D. POSSESSION, EXCHANGE AND/OR DELIVERY</p>
    <p class="pdf-default">On the Effective Date of this agreement, the goods/Services are in possession as follows:</p>
    <table class="effective-table">
      <tr class="effective-row"><td class="effective-col"></td></tr>
      <tr class="effective-row"><td class="effective-col"></td></tr>
      <tr class="effective-row"><td class="effective-col"></td></tr>
    </table>



<footer>
    <h1><p class="page-number"></p></h1>
</footer>
</body>
</html>
