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
    <!-- POPUP WINDOW --><!--
        <script>
            window.open('https://carodky.buchticka.eu/countdown','popupad','width=200,height=150')
        </script> -->

    <!--
    <script>
      var newPopup=window.open("","PopupWindow","height=250,width=250");
      var popContent='<HTML><HEAD><TITLE>GetSmart</TITLE></HEAD><BODY MARGINWIDTH=0 MARGINHEIGHT=0 LEFTMARGIN=0 TOPMARGIN=0 BOTTOMMARGIN=0>';
      popContent+= '<a target="_blank" href="http://DomainURL"><img src="http://www.yourdomain.com/ads/yourimage.gif" height=250 width=250 border=0></a>';
      popContent+='</BODY></HTML>';
      newPopup.document.write(popContent);
      newPopup.document.close();
      newPopup.focus();
    </script> -->

    
  
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
      <body  onload="window.showModalDialog('https://www.google.com');" style="background-color: transparent; font-family: Trebuchet MS">
      <!-- bgcolor="black" background="background.jpg" bgproperties="scroll" style="height:auto; background-position: center; background-repeat: no-repeat; background-size: cover; background-height:auto;"> -->

    <!-- example content -->
    <div style="width:100%; " class="mui-container">
      <div class="mui-panel" >
      <div style="text-align:center">
  <h1 style="text-align:center">Písničky na přání</h1>
  <a href="./"><button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Přání  </button></a>
  <!--<a href="./objednano"><button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Objednáno</button></a>-->
  <a href="./zpetnavazba"><button style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;" class="mui-btn mui-btn--primary mui-btn--raised">Zpětná vazba  </button></a>
  
  <!--<form class="mui-form" name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">-->
  <form class="mui-form" name="freecontactform" method="post" action="run.php" onsubmit="return validate.check(this)">
  <!--<legend><h1 style="text-align:center">Písničky na přání</h1></legend>-->
  
  
  <div class="mui-textfield  mui-textfield--float-label">
    <input type="text" name="OdKoho" id="OdKoho"><!--placeholder="Od koho je přání?">-->
    <label style="text-align: left">Od koho je přání?</label>
  </div>
  <div class="mui-textfield  mui-textfield--float-label">
    <input type="text" name="ProKoho" id="ProKoho"><!--placeholder="Pro koho je přání?">-->
    <label style="text-align: left">Pro koho je přání?</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <input type="text" name="Vzkaz" id="Vzkaz"><!--placeholder="Nějaký (veřejný) vzkaz? (Pro * k narozeninám / Jen tak do fronty)">-->
    <label style="text-align: left">Nějaký (veřejný) vzkaz? (K narozeninám / Jen tak do fronty)</label>
  </div>
  <div class="mui-textfield mui-textfield--float-label">
    <!--<textarea placeholder="Odkaz na písničku:"></textarea>-->
    <!--<input type="text" name="song" id="song" placeholder="Jméno písničky / odkaz na Spotify / YouTube, atd.">-->
    <input type="text" name="song" id="song" required ><!--placeholder="Jméno písničky / odkaz na Spotify / YouTube, atd.">-->
    <label style="text-align: left">Jméno písničky / odkaz na Spotify / YouTube, atd.</label>
  </div>                        
  <!--<div class="mui-textfield">
    <input type="text" name="AntiSpam" id="AntiSpam" placeholder="Napiš sem číslo 25">
    </div>-->
  <!--<button type="submit" class="mui-btn mui-btn--raised">Submit</button>-->
  <div style="text-align: center; /*display: inline-block; */s">
  <div class="g-recaptcha" data-sitekey="6Ld1l0AUAAAAAEU00Mds60evT-RIID6_37V9UYX2"></div>
  <button  type="submit" class="mui-btn mui-btn--primary mui-btn--raised">Odeslat</button>
                           </div>
</form>

<!--https://www.youtube.com/watch?time_continue=3&v=5By--1F7bWU -->
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

    
</body>
</html>