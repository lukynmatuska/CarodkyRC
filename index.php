<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#c7d5ed">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#c7d5ed">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#c7d5ed"><!--4285f4">-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.9.30/css/mui.min.css" rel="stylesheet" type="text/css" />
    <!--<link href="/mui.min.css" rel="stylesheet" type="text/css" /mu>    -->
    <script src="//cdn.muicss.com/mui-0.9.30/js/mui.min.js"></script>
    <title>Písničky na přání - Čarodky Rudice</title>
    <meta property="og:title" content="Písničky na přání - Čarodky Rudice" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="https://carodky.buchticka.eu/" />
    <meta property="og:image" content="https://carodky.buchticka.eu/background.jpg" />
    <meta property="og:description" content="Nechte si zahrát písničku na přání" />
    <meta property="fb:app_id" content="" />

    <style>
body {font-family: Trebuchet MS, Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 5%; /* 100px Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: transparent; /* #fefefe; */
    margin: auto;
    padding: 20px; /* 20px */
    /* border: 1px solid #888; */
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
  
    
  
  <!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.buchticka.eu/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
    </head>
    
      <body  onload="btn.onclick()" style="background-color: transparent; font-family: Trebuchet MS">
<!--<body  style="background-color: transparent; font-family: Trebuchet MS">-->

    <div style="width:100%; " class="mui-container">
      <div class="mui-panel" >
      <div style="text-align:center">
  <h1 style="text-align:center">Písničky na přání</h1>
  <div style="margin-bottom: 2%; ">
  <a href="./">           <button style="margin-left:auto; margin-right:auto; margin-top:auto; " class="mui-btn mui-btn--primary mui-btn--raised">Přání  </button></a>
  <a href="./objednano">  <button style="margin-left:auto; margin-right:auto; margin-top:auto; " class="mui-btn mui-btn--primary mui-btn--raised">Objednáno</button></a>
  <a href="./zpetnavazba"><button style="margin-left:auto; margin-right:auto; margin-top:auto; " class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba  </button></a>
  <a href="./plakat">     <button style="margin-left:auto; margin-right:auto; margin-top:auto; " class="mui-btn mui-btn--primary mui-btn--raised">Plakát  </button></a>
  <!--<input type="submit" style="display: none;">-->
  <button id="myBtn" style="display: none; margin-left:auto; margin-right:auto; margin-top:auto; " class="mui-btn mui-btn--primary mui-btn--raised">Odpočet</button>
  </div>


  <!-- Trigger/Open The Modal --><!--
<button id="myBtn">Open Modal</button>-->
  
  <!--<form class="mui-form" name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">-->
  <!-- <form class="mui-form" name="freecontactform" method="post" action="run.php" onsubmit="return validate.check(this)">-->
  <form class="mui-form" method="post" action="run.php">
  <div class="mui-textfield  mui-textfield--float-label">
    <input type="text" name="OdKoho" id="OdKoho">
    <label style="text-align: left; ">Od koho je přání?</label>
  </div>
  <div class="mui-textfield  mui-textfield--float-label">
    <input type="text" name="ProKoho" id="ProKoho">
    <label style="text-align: left; ">Pro koho je přání?</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="text" name="Vzkaz" id="Vzkaz">
    <label style="text-align: left; ">Nějaký (veřejný) vzkaz? (K narozeninám / Jen tak do fronty)</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="text" name="song" id="song" required >
    <label style="text-align: left; ">Jméno písničky <b style="color: red; ">*</b> / odkaz na Spotify / YouTube, atd.</label>
  </div>                        
  <!--<div style="text-align: center; ">-->
    <label style="border-bottom: 5px solid transparent; text-align: left; float: left;">Ověření ReCaptcha: <b style="color: red; ">*</b></label>
    <br>
    <div style="border-bottom: 10px solid transparent; " class="g-recaptcha" data-sitekey="6Ld1l0AUAAAAAEU00Mds60evT-RIID6_37V9UYX2"></div>
    <button  type="submit" class="mui-btn mui-btn--primary mui-btn--raised">Odeslat</button>
  <!--</div>-->
</form>
<br>
<p style="text-align: center; font-size: 100%; border=0%; padding=0%"><b style="text-align: left; color: red; ">* </b> Povinné pole</p>
<p style="text-align: center; font-size: 85%; border=0%; padding=0%">Odeslání formuláře může chvíli trvat.</p>

 <div class="paticka" style="text-alig: center;">
   <hr ><p style="text-align: center; font-size: 75%; border=0%; padding=0%"> Copyright &copy; 2018, <a href="https://buchticka.eu">Buchticka.eu</a> Team <!--<a href="mailto:posta@buchticka.eu" class="blind">posta@buchticka.eu</a>-->
   </p>
   </div>

   
   </div>
</div>
</div>
   
  <div style="text-align: center;"><a href="https://www.toplist.cz"><script language="JavaScript" type="text/javascript">
<!--
document.write('<img src="https://toplist.cz/count.asp?id=1782012&logo=mc&http='+
escape(document.referrer)+'&t='+escape(document.title)+
'&wi='+escape(window.screen.width)+'&he='+escape(window.screen.height)+'&cd='+
escape(window.screen.colorDepth)+'" width="88" height="60" border=0 alt="TOPlist" />');
//--></script><noscript><img src="https://toplist.cz/count.asp?id=1782012&logo=mc" border="0"
alt="TOPlist" width="88" height="60" /></noscript></a>
</div>        <a style="color: transparent;" href="https://www.toplist.cz/stat/result/1782012/day-graph/browser/os/entry-page/referrer/resolution/color/country/?day=0">DETAILNÍ STATISTIKY</a>



<!-- The Modal -->
<div id="myModal" class="modal">
      <!-- Modal content -->
  <div class="modal-content" style=" width: 75%; height: 75%;">
    <span class="close">&times;</span>
    <!-- <p>Some text in the Modal..</p> -->
    <iframe src="countdown/index.html" width="100%" height="95%" frameborder="0" align="baseline" scrolling="no" name="ramecek"></iframe>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
</body>
</html>